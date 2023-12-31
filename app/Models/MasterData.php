<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    use HasFactory;
    protected $table = 'master_data';
    protected $guarded = [];

    public function devicesModules()
    {
        return $this->hasMany(DevicesModule::class, 'master_data_id');
    }
}
