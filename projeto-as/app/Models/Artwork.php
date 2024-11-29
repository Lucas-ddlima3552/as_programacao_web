<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artwork extends Model
{
    protected $fillable = [
        'title ',
        'creation_year ',
        'category ',
        'image',
        'artist_id'
    ];

    public function artist():BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}

