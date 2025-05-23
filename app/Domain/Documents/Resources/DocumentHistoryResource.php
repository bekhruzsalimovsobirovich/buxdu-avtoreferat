<?php

namespace App\Domain\Documents\Resources;

use App\Domain\Departments\Resources\DepartmentResource;
use App\Domain\Files\Resources\FileResource;
use App\Domain\Teachers\Resources\TeacherResource;
use App\Domain\Universities\Resources\UniversityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentHistoryResource extends JsonResource
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
            'status' => $this->status,
            'checked_at' => $this->checked_at,
            'description' => $this->description,
        ];
    }
}
