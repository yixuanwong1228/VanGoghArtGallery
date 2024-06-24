<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artistID', 'id');
    }
}
