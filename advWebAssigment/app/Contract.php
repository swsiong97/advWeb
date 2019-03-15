<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'id',
        'ownerId',
        'tenantId',
        'type',
        'address',
        'description'
    ];
        
}
