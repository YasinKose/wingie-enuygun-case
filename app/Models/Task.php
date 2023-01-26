<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'task',
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
