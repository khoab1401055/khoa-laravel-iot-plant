<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
class LoggableModel extends Model
{
    use HasFactory;
    public static function logCustomError($errorMessage, $actionName)
    {
        Log::channel('daily')->error('Error message: ' . $errorMessage . ' | User: ' . auth()->user()->name . ' | Action: ' . $actionName . ' | Route: ' . request()->route()->getName() . ' | IP: ' . request()->ip());
    }
}
