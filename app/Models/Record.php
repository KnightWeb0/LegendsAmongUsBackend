<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;


    protected $guarded = [];

    // an record label can belong to so many artists
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }


}
