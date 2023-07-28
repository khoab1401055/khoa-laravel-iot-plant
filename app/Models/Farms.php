<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farms extends Model
{
    use HasFactory;
    protected $table = 'farms';
    protected $guarded = [];
    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }
    public function activeFarmLocation()
    {
        return $this->hasOne(FarmLocation::class, 'farm_id', 'id')->where('is_active', true);
    }
}
