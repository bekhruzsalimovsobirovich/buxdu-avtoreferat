<?php

namespace App\Models;

use App\Domain\Departments\Models\Department;
use App\Domain\Universities\Models\University;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'university_id',
        'department_id',
        'avatar',
        'phone',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
