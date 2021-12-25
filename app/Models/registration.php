<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $fillable=[
        'name','email','phone','address','blood_group','date','disease'
    ];
}
