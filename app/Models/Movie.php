<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Movie extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include all movies.
     */
    public function scopeMoviesQB(Builder $query): Builder
    {
        return $query ; 
    }
}
