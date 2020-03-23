<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function company() {
        return $this->belongsTo('App\Company');
    }
}
