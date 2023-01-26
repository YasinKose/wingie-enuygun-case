<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * @var string[]
     */
    protected $appends = [
        'intensity_week'
    ];

    /**
     * @return HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    /**
     * @return string
     */
    public function getIntensityWeekAttribute(): string
    {
        $totalHours = $this->getAttribute("intensity");
        $hoursPerWeek = 45;
        $hoursPerDay = $hoursPerWeek / 5;

        $weeks = floor($totalHours / $hoursPerWeek);
        $remainingHours = $totalHours % $hoursPerWeek;
        $days = floor($remainingHours / $hoursPerDay);
        $hours = $remainingHours % $hoursPerDay;

        $output = "";
        if ($weeks > 0) {
            $output = "$weeks <small>weeks</small>";
        }

        if ($days > 0) {
            $output .= " $days <small>days</small>";
        }

        if ($hours > 0) {
            $output .= " $hours <small>hours</small>";
        }

        if (empty($output)) {
            return "0 <small>hours</small>";
        }

        return "It is " . $output;
    }
}
