<?php

namespace App\Http\Controllers\Teachers;

use App\Domain\Teachers\Actions\StoreTeacherAction;
use App\Domain\Teachers\DTO\StoreTeacherDTO;
use App\Domain\Teachers\Repositories\TeacherRepository;
use App\Domain\Teachers\Requests\StoreTeacherRequest;
use App\Domain\Teachers\Resources\TeacherResource;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public mixed $teachers;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teachers = $teacherRepository;
    }

    public function getAllTeacher($department_id)
    {
        return $this->successResponse('', TeacherResource::collection($this->teachers->getAllTeachers($department_id)));
    }

    public function store(StoreTeacherRequest $request, StoreTeacherAction $action)
    {
        try {
            $dto = StoreTeacherDTO::fromArray($request->validated());
            $response = $action->execute($dto);

            return $this->successResponse('Teacher Created Successfully',new TeacherResource($response) );
        }catch (Exception $exception){
            return $this->errorResponse($exception->getMessage());
        }
    }
}
