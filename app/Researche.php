<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Researche extends Model
{
    protected $guarded = ['id'];
    // protected $fillable = ['title', 'description', 'author', 'date'];

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('d F Y');
    }
}
