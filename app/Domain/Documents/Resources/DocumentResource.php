<?php

namespace App\Domain\Documents\Resources;

use App\Domain\Departments\Resources\DepartmentResource;
use App\Domain\Files\Resources\FileResource;
use App\Domain\Teachers\Resources\TeacherResource;
use App\Domain\Universities\Resources\UniversityResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
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
            'subject' => $this->subject,
            'type' => $this->type,
            'year' => $this->year,
            'page' => $this->page,
            'lang' => $this->lang,
            'description' => $this->description,
            'teacher' => new TeacherResource($this->teacher),
            'files' => FileResource::collection($this->files),
            'histories' => DocumentHistoryResource::collection($this->histories),
        ];
    }
}
