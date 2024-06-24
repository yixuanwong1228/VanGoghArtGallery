<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtWork extends Model
{
    use HasFactory;

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artistID', 'id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'artworkID', 'id');
    }
}
