<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    public function artwork()
    {
        return $this->belongsTo(Artwork::class, 'artworkID', 'id');
    }
}
