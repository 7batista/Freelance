<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joboffer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'company',
        'location',
        'skills',
        'salarymin',
        'salarymax'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'salarymin' => 'float',
        'salarymax' => 'float',
    ];
}
