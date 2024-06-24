<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // Primary key column name
    protected $keyType = 'string'; // If 'id' is a string

    public function artWorks()
    {
        return $this->hasMany(ArtWork::class, 'artistID', 'id');
    }

    public function biographies()
    {
        return $this->hasMany(Biography::class, 'artistID', 'id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'artistID', 'id');
    }
}
