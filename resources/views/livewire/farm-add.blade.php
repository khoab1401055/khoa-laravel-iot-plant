<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Farms /</span> List</h4>

    <div class="row">

        <div class="card">
            <div class="card-body">
                <div class="container mt-8">
                    <form wire:submit.prevent="createFarm">
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
                            <label for="description" class="form-label">{{ __('messages.description') }} <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" id="description" wire:model.defer="description"> </textarea>
                            @error('description')
                                <!-- Hiển thị lỗi cho trường 'description' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="customer_id" class="form-label">{{ __('messages.customer_select') }} <span class="text-danger">*</span></label>
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
                        <!-- Trường nhập liệu cho thông tin location -->
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
                            <label for="location" class="form-label">{{ __('messages.location') }}</label>
                            <input type="text" class="form-control" id="location" wire:model.defer="location">
                            @error('location')
                                <!-- Hiển thị lỗi cho trường 'location' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="address" class="form-label">{{ __('messages.address') }}</label>
                            <input type="text" class="form-control" id="address" wire:model.defer="address">
                            @error('address')
                                <!-- Hiển thị lỗi cho trường 'address' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>

                        <div class="mb-3">
                            <label for="street" class="form-label">{{ __('messages.street') }}</label>
                            <input type="text" class="form-control" id="street" wire:model.defer="street">
                            @error('street')
                                <!-- Hiển thị lỗi cho trường 'street' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="district" class="form-label">{{ __('messages.district') }}</label>
                            <input type="text" class="form-control" id="district" wire:model.defer="district">
                            @error('district')
                                <!-- Hiển thị lỗi cho trường 'district' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ward" class="form-label">{{ __('messages.town') }}</label>
                            <input type="text" class="form-control" id="ward" wire:model.defer="ward">
                            @error('ward')
                                <!-- Hiển thị lỗi cho trường 'ward' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">{{ __('messages.city') }} <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city" wire:model.defer="city">
                            @error('city')
                                <!-- Hiển thị lỗi cho trường 'city' -->
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Other fields here -->
                        <button type="submit" class="btn btn-primary">{{ __('messages.create') }} {{ __('messages.farm') }}</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>

@section('scripts')
@endsection
