<?php

namespace App\Domain\Teachers\Resources;

use App\Domain\Departments\Resources\DepartmentResource;
use App\Domain\Universities\Resources\UniversityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'employee_id_number' => $this->employee_id_number,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'surname' => $this->surname,
            'phone' => $this->profile->phone,
            'type' => $this->profile->type,
            'university' => new UniversityResource($this->profile->university),
            'department' => new DepartmentResource($this->profile->department),
        ];
    }
}
