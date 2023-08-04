<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CustomersModel extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "customers";
    protected $fillable = [
        'name' ,
        'image',
        'birth',
        'gender',
        'address',
        'email',
        'phone',
        'username',
        'password',
        'number_of_booking',
    ];

}
