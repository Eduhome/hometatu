<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Things_iot extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'key_url', 'user_id','campo_personalizado1','campo_personalizado2','campo_personalizado3','created_at'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
