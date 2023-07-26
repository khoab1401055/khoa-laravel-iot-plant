<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceMaster extends Model
{
    use HasFactory;
    protected $table = 'devices_master';
    protected $guarded = [];

}
