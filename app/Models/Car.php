<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //Trait
    use HasFactory;

    // Primary Key
    protected $primaryKey = 'id';

    //Mass Assignment
    protected $fillable = [
        'name',
        'also_called',
        'manufacturer',
        'color',
        'engine',
        'release_date',
        'description',
        'price',
    ];
}
