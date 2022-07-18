<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lended extends Model
{
    use HasFactory;
    protected $fillable = [
        'lendeds_id', 
        'lendeds_name', 
        'lendeds_contact', 
        'lendeds_address', 
        'lendeds_nic', 
        'lendeds_email', 
        'chassis_no', 
        'model'
    ];
}
