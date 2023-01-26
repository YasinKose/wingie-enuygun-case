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
        'intensity'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'id'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'intensity' => 'int'
    ];
}
