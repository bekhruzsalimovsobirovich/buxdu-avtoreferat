<?php

namespace App\Domain\Documents\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentHistory extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'document_id',
        'status',
        'description',
        'checked_at',
    ];
}
