<?php

namespace App\Domain\Sciences\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Science extends Model
{
    protected $fillable = [
        'cipher',
        'name',
    ];
}
