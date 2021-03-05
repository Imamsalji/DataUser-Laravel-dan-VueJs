<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'namadepan', 'namabelakang', 'jk', 'email', 'ttl'
    ];
}
