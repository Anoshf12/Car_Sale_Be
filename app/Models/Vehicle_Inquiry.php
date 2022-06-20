<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle_Inquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contact',
        'email',
        'profession',
        'address',
        'make',
        'brand',
        'model',
        'payment',
        'insurance',
        'remarks'
    ];
}
