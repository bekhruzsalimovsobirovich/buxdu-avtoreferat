<?php

namespace App\Domain\Universities\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'name',
        'code',
    ];
}
