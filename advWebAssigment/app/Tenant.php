<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'phoneNo',
    ];
}
