<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> {{ $results->name_code }} /</span>
        {{ __('messages.details') }} </h4>

    <div class="row mb-4">
        <div class="col-8 order-0 d-flex" id="{{ __('messages.information') }}">
            <div class="card flex-fill">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <h5 class="card-header text-primary fw-bold">{{ $results->name_code }}</h5>
                        <div class="card-body">
                            <p class="mb-4">
                                {{ $farm->description }}
                            </p>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bxs-user-pin me-2 text-green-4"></i>
                                    <span>{{ $results->customer->name }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bxs-envelope me-2 text-green-4"></i>
                                    <span>{{ $results->customer->email }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bxs-phone me-2 text-green-4"></i>
                                    <span>{{ preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1 $2 $3', $results->customer->phone) }}</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('images/undraw_appreciation_0xsh.svg') }}" height="140"
                                alt="View Badge User"
                                data-app-dark-img="{{ asset('images/undraw_appreciation_0xsh.svg') }}"
                                data-app-light-img="{{ asset('images/undraw_appreciation_0xsh.svg') }} ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 order-1 d-flex" id="{{ __('messages.location') }}">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between w-100">
                            <div class="card-title w-100">
                                <h5 class="text-nowrap mb-2 text-primary fw-bold">
                                    {{ trans('messages.location_title') }}</h5>
                                <ul class="list-group list-group-flush ">
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.location') }}:</span>
                                        {{ $results->activeFarmLocation->location }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.address') }}:</span>
                                        {{ $results->activeFarmLocation->address }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.street') }}:</span>
                                        {{ $results->activeFarmLocation->street }}
                                    </li>

                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.town') }}:</span>
                                        {{ $results->activeFarmLocation->ward }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.district') }}:</span>
                                        {{ $results->activeFarmLocation->district }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.city') }}:</span>
                                        {{ $results->activeFarmLocation->city }}
                                    </li>
                                    <li class="list-group-item p-0"></li>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <!-- Hiển thị danh sách Sensor Nodes -->
        <!-- Hiển thị danh sách Sensor Nodes -->
        @if ($farm->sensorNodes && count($farm->sensorNodes) > 0)
            <div class="row">
                @foreach ($farm->sensorNodes as $sensorNode)
                    <div class="col-4">
                        <div class="card h-100">
                            <div class="square-image">
                                <img class="card-img-top" src="{{ asset('images/undraw_artificial_intelligence_re_enpp.svg') }}"
                                    alt="Default Image">
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><strong>{{ $sensorNode->name }}</strong></h5>
                                <p class="card-text ">
                                    {{ $sensorNode->description }}
                                </p>
                                <!-- Hiển thị các thiết bị của Sensor Node tại đây -->
                                @if ($sensorNode->devices && count($sensorNode->devices) > 0)
                                    <ul>
                                        @foreach ($sensorNode->devices as $device)
                                            <li class="card-text small">{{ $device->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Không có thiết bị nào cho Sensor Node này.</p>
                                @endif
                                {{-- <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Hiển thị thông báo nếu không có Sensor Nodes -->
            <p>Không có Sensor Nodes cho farm này.</p>
        @endif


    </div>
</div>

@section('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            // console.log('Giá trị tìm kiếm:', @this.search);
            var divIds = ['{{ __('messages.information') }}', '{{ __('messages.location') }}'];
            divIds.forEach(function(id) {
                var div = document.getElementById(id);
                var searchLowerCase = @this.search.toLowerCase();
                if (id.toLowerCase().indexOf(searchLowerCase) !== -1) { // console.log(div);
                    div.style.display = 'block';
                    div.classList.add('d-flex');
                } else {
                    div.style.display = 'none';
                    div.classList.remove('d-flex');
                }
            });
        })
    </script>
@endsection
