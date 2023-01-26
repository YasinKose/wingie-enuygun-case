<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'task',
        'difficulty',
        'time',
        'developer_id'
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'id',
        'developer_id'
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

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }

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
