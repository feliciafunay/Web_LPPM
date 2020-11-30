<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Publication extends Model
{
    protected $guarded = ['id'];

    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])->translatedFormat('d F Y');
    }
}
