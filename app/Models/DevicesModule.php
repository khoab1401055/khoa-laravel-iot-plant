<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevicesModule extends Model
{
    use HasFactory;
    protected $table = 'devices_module';
    protected $guarded = [];
    public function masterData()
    {
        return $this->belongsTo(MasterData::class, 'master_data_id');
    }
}
