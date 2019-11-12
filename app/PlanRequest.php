<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanRequest extends Model
{
    protected $table = 'plansCustoms';

    public function plan()
    {
        return $this->hasOne('App\Plan', 'id', 'planId');
    }

    public function ati()
    {
        return $this->hasOne('App\Ati', 'id', 'atId');
    }
}
