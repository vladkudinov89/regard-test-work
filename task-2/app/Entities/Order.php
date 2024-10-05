<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'manager_id',
    ];

    public function manager()
    {
        return $this->hasOne('App\Entities\Manager', 'manager_id', 'id');
    }
}
