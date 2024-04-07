<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable= [
        'firstname',
        'lastname',
        'email',
        'mobile',
        'password',
        
    ];
    public $attributes = [
        'otp' => '0'
    ]; 
}
