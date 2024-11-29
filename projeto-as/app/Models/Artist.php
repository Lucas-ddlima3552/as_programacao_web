<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'biography ',
        'birth_year ',
        'id'
    ];

    public function Artwork(): HasMany
    {
        return $this->hasMany(Artwork::class);
    }
}
