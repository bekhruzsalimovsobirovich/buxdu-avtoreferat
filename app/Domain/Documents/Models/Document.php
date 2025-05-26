<?php

namespace App\Domain\Documents\Models;

use App\Domain\Files\Models\File;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Document extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'type',
        'year',
        'page',
        'lang',
        'status',
        'description',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function histories()
    {
        return $this->hasMany(DocumentHistory::class, 'document_id', 'id');
    }
}
