<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Devices /</span> List</h4>

    <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 row-cols-sm-3 row-cols-xs-2 g-4 mb-5">
        @foreach ($devices as $device)
        <div class="col">
            <div class="card h-100">
                <div class="square-image">
                    <img class="card-img-top" src="{{ asset('images/undraw_cabin_hkfr.svg') }}" alt="Default Image">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $device->device_id }}</strong></h5>
                    <p class="card-text small mb-0">
                        <i class='bx bxs-pencil' ></i> {{ $device->name }}
                    </p>
                    <p class="card-text small">

                        <i class='bx bx-captions' ></i> {{ $device->name_alias }}
                    </p>
                    <!-- Hiển thị các thông tin khác về device tại đây -->
                    <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
