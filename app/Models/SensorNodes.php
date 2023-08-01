<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorNodes extends Model
{
    use HasFactory;
    protected $table ='sensor_nodes';
    protected $guarded = [];
    public function devices()
    {
        return $this->hasMany(DeviceMaster::class, 'sensor_node_id');
    }
}
