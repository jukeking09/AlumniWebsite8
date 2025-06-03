<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\EventImage;

class Event extends Model
{
    protected $fillable = [
        'event_name',
        'event_description',
        'event_date',
        'user_id',
        'event_time_from',
        'event_time_to',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
    // public function getFormattedDateAttribute()
    // {
    //     return $this->event_date->format('F j, Y, g:i a');
    // }
}
