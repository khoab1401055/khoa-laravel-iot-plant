<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Farms /</span> List</h4>

    <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 row-cols-sm-3 row-cols-xs-2 g-4 mb-5">

        @if ($r_farms)
            @foreach ($r_farms as $farm)
                <div class="col">
                    <div class="card h-100 @if ($farm->id == session('newFarmId')) new-farm @endif">
                        <div class="square-image">
                            <img class="card-img-top" src="{{ asset('images/undraw_cabin_hkfr.svg') }}"
                                alt="Default Image">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><strong>{{ $farm->name_code }}</strong></h5>
                            <p class="card-text line-clamp-3">
                                {{ $farm->description }}
                            </p>
                            <p class="card-text d-flex align-items-center justify-content-between">
                                <small class="text-muted"><i class='bx bxs-user-circle'></i>
                                    {{ $farm->customer ? $farm->customer->name : '' }}</small>
                                <small
                                    class="ml-auto text-muted">{{ \Carbon\Carbon::parse($farm->updated_at)->isoFormat('MMM YYYY') }}
                                </small>
                            </p>
                            <div class="dropdown-divider mb-2"></div>
                            <a href="{{ route('goto.farm', $farm->name_code) }}"
                                class="btn btn-primary mt-3 ml-auto">{{ __('messages.go_to_farm') }}</a>
                        </div>

                    </div>
                </div>
            @endforeach
        @else
            <p>Không có dữ liệu farms.</p>
        @endif

    </div>
</div>

@section('scripts')
@endsection
