<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['table',
        'dish',
        'email',
        'timeToOrder',
        'timeOfOrder',
        'done',
        'name'];
    protected $guarded = ['id'];
}
