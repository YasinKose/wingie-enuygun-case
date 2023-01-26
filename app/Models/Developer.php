<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'difficulty',
        'time'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'id'
    ];
}
