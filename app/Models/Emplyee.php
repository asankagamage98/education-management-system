<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplyee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'mobileNo',
        'dob',
        'nic',
        'role'
    ];
}
