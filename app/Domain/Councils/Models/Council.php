<?php

namespace App\Domain\Councils\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    protected $fillable = [
        'code',
        'name',
    ];
}
