<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function url()
    {
        return $this->hasOne(URL::class);
    }
}
