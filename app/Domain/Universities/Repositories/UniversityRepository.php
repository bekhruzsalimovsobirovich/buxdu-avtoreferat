<?php
namespace App\Domain\Universities\Repositories;

use App\Domain\Faculties\Models\Faculty;
use App\Domain\Universities\Models\University;
use Illuminate\Database\Eloquent\Collection;

class UniversityRepository
{
    /**
     * @return Collection|array
     */
    public function getAllUniversities(): Collection|array
    {
        return University::query()
            ->get()
            ->sortBy('name');
    }

}
