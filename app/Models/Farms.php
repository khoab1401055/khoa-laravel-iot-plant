<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
    protected static function booted()
    {
        static::creating(function ($farm) {
            $farm->created_by = Auth::id();
        });

        static::updating(function ($farm) {
            $farm->updated_by = Auth::id();
        });
    }
}
