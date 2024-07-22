<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $guarded = [];

   // an Artist is with one band at a time
    //has one
    public function bands(){

        return $this->hasOne(Bands::class);
    }


    //an artist can be with so many record labels
    public function recordLabels()
    {
        return $this->belongsToMany(Record::class);
    }

}
