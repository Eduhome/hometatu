<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceControl extends Model
{
    use HasFactory;


    protected $fillable = [
      'device_id', 'name', 'control_type', 'value', 'permissions', 'update_policy', 'campo_personalizado1', 'campo_personalizado2', 'campo_personalizado3', 'status'
  ];
}
