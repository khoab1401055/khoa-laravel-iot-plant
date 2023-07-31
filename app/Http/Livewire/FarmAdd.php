<?php

namespace App\Http\Livewire;

use App\Models\Customers;
use App\Models\FarmLocation;
use App\Models\Farms;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FarmAdd extends Component
{

    public $description;
    public $name_code;
    public $customer_id;
    public $latitude;
    public $longitude;
    public $location;
    public $address;
    public $street;
    public $district;
    public $ward;
    public $city;

    protected $lastInsertedId = null;
    public function mount()
    {
        // Lấy ID cuối cùng trong bảng farms
        $lastFarm = Farms::latest()->first();
        $this->lastInsertedId = $lastFarm ? $lastFarm->id : 0;
        $this->generateNameCode(); // Gọi hàm để tự động tạo giá trị cho trường name_code
    }

    public function createFarm()
    {
        // Kiểm tra validation (nếu cần)
        $this->validate([
            'description' => 'required|string',
            'name_code' => 'required|unique:farms|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'location' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'ward' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        // Thêm dữ liệu vào cơ sở dữ liệu
        $farm = Farms::create([
            'description' => $this->description,
            'name_code' => $this->name_code,
            'customer_id' => $this->customer_id,
        ]);
        FarmLocation::create([
            'farm_id' => $farm->id,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'location' => $this->location,
            'address' => $this->address,
            'street' => $this->street,
            'district' => $this->district,
            'ward' => $this->ward,
            'city' => $this->city,
            'created_by' => Auth::id(),
        ]);

        $this->resetValaue();

        session()->flash('message', 'Farm created successfully!');
        session()->flash('newFarmId', $farm->id);

        return redirect()->route('farms.list');
    }

    public function render()
    {
        $customers = Customers::all(); // Lấy danh sách customers từ cơ sở dữ liệu
        return view('livewire.farm-add',compact('customers'));
    }
    public function generateNameCode()
    {
        // Tự động tạo giá trị cho trường name_code dựa vào ID cuối cùng
        $nextId = $this->lastInsertedId + 1;
        $this->name_code = 'FARM' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
    }
    public function resetValaue(){
        $this->description = '';
        $this->name_code = '';
        $this->customer_id = '';
        $this->latitude = 0.0;
        $this->longitude = 0.0;
        $this->location = '';
        $this->address = '';
        $this->street = '';
        $this->district = '';
        $this->ward = '';
        $this->city = '';
    }

}
