<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Farms /</span> List</h4>

    <div class="row">
        <div class="container mt-8">
            <form wire:submit.prevent="createFarm">
                <div class='card mb-3'>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('messages.description') }}</h5>
                        <div class="dropdown-divider mb-2"></div>
                        <div class="mb-3">
                            <label for="name_code" class="form-label">{{ __('messages.name_code') }}</label>
                            <input type="text" class="form-control" id="name_code" wire:model.defer="name_code"
                                disabled>
                            @error('name_code')
                                <!-- Hiển thị lỗi cho trường 'name_code' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('messages.description') }} <span
                                    class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" id="description" wire:model.defer="description"> </textarea>
                            @error('description')
                                <!-- Hiển thị lỗi cho trường 'description' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="customer_id" class="form-label">{{ __('messages.customer_select') }} <span
                                    class="text-danger">*</span></label>
                            <select class="form-control" id="customer_id" wire:model.defer="customer_id">
                                <option value="">--{{ __('messages.customer_select') }} --</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                                <!-- Hiển thị lỗi cho trường 'customer_id' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Trường nhập liệu cho thông tin location -->
                <div class='card mb-3'>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('messages.location_title') }}</h5>
                        <div class="dropdown-divider mb-2"></div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="latitude" class="form-label">{{ __('messages.latitude') }}</label>
                                <input type="text" class="form-control" id="latitude" wire:model.defer="latitude">
                                @error('latitude')
                                    <!-- Hiển thị lỗi cho trường 'latitude' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="longitude" class="form-label">{{ __('messages.longitude') }}</label>
                                <input type="text" class="form-control" id="longitude" wire:model.defer="longitude">
                                @error('longitude')
                                    <!-- Hiển thị lỗi cho trường 'longitude' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="province" class="form-label">{{ __('messages.province') }} <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="city" wire:model.defer="city"
                                    wire:change="updateCity($event.target.value)">
                                    <option value="">-- Select Province --</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label for="district" class="form-label">{{ __('messages.district') }} <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="district" wire:model.defer="district"
                                    wire:change="updateDistrict($event.target.value)">
                                    <option value="">-- Select District --</option>
                                    @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                                @error('district')
                                    <!-- Hiển thị lỗi cho trường 'district_id' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3 col-6">
                                <label for="ward" class="form-label">{{ __('messages.town') }} <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="ward" wire:model.defer="ward">
                                    <option value="">-- Select Ward --</option>
                                    @foreach ($wards as $ward)
                                        <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                                    @endforeach
                                </select>
                                @error('ward')
                                    <!-- Hiển thị lỗi cho trường 'ward_id' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3 col-6">
                                <label for="street" class="form-label">{{ __('messages.street') }} <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="street" wire:model.defer="street">
                                @error('street')
                                    <!-- Hiển thị lỗi cho trường 'street' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="address" class="form-label">{{ __('messages.address') }} <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address"
                                    wire:model.defer="address">
                                @error('address')
                                    <!-- Hiển thị lỗi cho trường 'address' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="location" class="form-label">{{ __('messages.location') }} <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="location"
                                    wire:model.defer="location">
                                @error('location')
                                    <!-- Hiển thị lỗi cho trường 'location' -->
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class='card mb-3'>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ __('messages.device_add_tofarm') }}</h5>
                        <div class="dropdown-divider mb-2"></div>

                        <div class="row">
                            @if (!empty($selectedSensorNodeIds))
                                @foreach ($selectedSensorNodeIds as $selectedSensorNodeId)
                                    @php
                                        // Truy vấn thông tin của sensor node từ cơ sở dữ liệu
                                        $selectedSensorNode = App\Models\SensorNodes::find($selectedSensorNodeId);
                                    @endphp
                                    <div class="col-2">
                                        <div class="card d-grid">
                                            <div class="card-body p-3">
                                                <p class="m-0"><strong>Name:</strong> {{ $selectedSensorNode->name }}</p>
                                                <p class="line-clamp-2"><strong>Description:</strong> {{ $selectedSensorNode->description }}</p>
                                                <button type="button" class="btn btn-sm btn-warning" wire:click="cancelSelectSensorNode({{ $selectedSensorNode->id }})">Cancel</button>
                                                                                        </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="col-2">
                                <div class="card d-grid">
                                    <div class="card-body p-2">
                                        <div class="p-4 border-square d-flex align-items-center justify-content-center" id="add_sensor_nodes">
                                            <i class="bx bx-folder-plus p-0" style="font-size: 2rem;"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- Other fields here -->
                <button type="submit" class="btn btn-primary">{{ __('messages.create') }}
                    {{ __('messages.farm') }}</button>
            </form>

        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="sensorNodesModal" tabindex="-1" role="dialog"
        aria-labelledby="sensorNodesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sensorNodesModalLabel">Sensor Nodes List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Nội dung danh sách sensor nodes sẽ được hiển thị ở đây -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Select</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sensorNodes as $sensorNode)
                                <tr>
                                    <td>{{ $sensorNode->name }}</td>
                                    <td>{{ $sensorNode->description }}</td>
                                    <td>
                                        <button wire:click="selectSensorNode({{ $sensorNode->id }})"
                                            class="btn btn-primary btn-sm">Select</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Select</button>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            // Lắng nghe sự kiện click vào div "add_sensor_nodes"
            document.getElementById('add_sensor_nodes').addEventListener('click', function() {
                // Hiển thị modal khi click vào "add_sensor_nodes"
                $('#sensorNodesModal').modal('show');
            });
        </script>
    @endsection
