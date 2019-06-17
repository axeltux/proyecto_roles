<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    /**
     *Relation many-to-many
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
                    ->withTimestamps();
    }
}
