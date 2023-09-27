<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMaster extends Model
{
    use HasFactory;
    protected $table = 'devices_master';
    protected $guarded = [];
    public function devicesModules()
    {
        return $this->hasMany(DevicesModule::class, 'devices_master_id');
    }

    public function devicesDescription()
    {
        return $this->hasOne(DevicesDescription::class, 'id');
    }

}
