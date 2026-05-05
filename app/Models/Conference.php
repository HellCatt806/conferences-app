<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
        'title',
        'description',
        'lecturers',
        'date',
        'time',
        'address',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_conferences');
    }

    public function isPast()
    {
        return $this->date < now()->toDateString();
    }
}