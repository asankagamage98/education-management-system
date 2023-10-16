<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewTeachers extends Model
{
    use HasFactory;

    protected $fillable =[
            'name',
            'nic',
            'age',
            'learnSubject',
            'workSchool'
    ];

}
