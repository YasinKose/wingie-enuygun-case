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

    /**
     * @var string[]
     */
    protected $casts = [
        'difficulty' => 'int',
        'time' => 'int'
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'difficulty_level'
    ];

    /**
     * Zorluk seviyesini hesaplar
     *
     * @return float|int
     */
    public function getDifficultyLevelAttribute()
    {
        return $this->getAttribute("difficulty") * $this->getAttribute("time");
    }
}
