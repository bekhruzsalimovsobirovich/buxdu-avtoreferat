<?php

namespace App\Domain\Sciences\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubScience extends Model
{
    protected $fillable = [
        'science_id',
        'cipher',
        'name',
        'network_of_science',
    ];
}
