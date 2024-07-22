<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    use HasFactory;


    //a song belongs to one Album
    protected $guarded = [];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

}
