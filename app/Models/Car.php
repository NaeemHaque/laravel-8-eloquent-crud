<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //* use "php artisan make:model Car -m" for craete a model with crud actions methods
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $timestamp = true;
    
    protected $fillable = [
        'name',
        'founded',
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $visible = [
        'name',
        'founded',
        'description'
    ];


}
