<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ request()->segment(3) }} /</span> {{ __('messages.details') }} </h4>

    <div class="row">
        <div class="col-8 order-0 d-flex">
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
        <div class="col-4 order-1 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between w-100">
                            <div class="card-title w-100">
                                <h5 class="text-nowrap mb-2 text-primary fw-bold">{{ trans('messages.location') }}</h5>
                                <ul class="list-group list-group-flush ">
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.address') }}:</span>  {{ $results->activeFarmLocation->address }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.street') }}:</span> {{ $results->activeFarmLocation->street }}
                                    </li>

                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.town') }}:</span> {{ $results->activeFarmLocation->ward }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.district') }}:</span> {{ $results->activeFarmLocation->district }}
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fw-bold">{{ __('messages.city') }}:</span>  {{ $results->activeFarmLocation->city }}
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
</div>

@section('scripts')
@endsection
