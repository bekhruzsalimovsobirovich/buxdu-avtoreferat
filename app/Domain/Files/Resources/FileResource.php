<?php

namespace App\Domain\Files\Resources;

use App\Domain\Departments\Resources\DepartmentResource;
use App\Domain\Universities\Resources\UniversityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FileResource extends JsonResource
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
            'name' => $this->name,
            'path' => $this->path
        ];
    }
}
