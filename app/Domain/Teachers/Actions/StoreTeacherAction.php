<?php

namespace App\Domain\Teachers\Actions;

use App\Domain\Teachers\DTO\StoreTeacherDTO;
use App\Models\User;
use App\Models\UserProfile;
use Exception;
use Illuminate\Support\Facades\DB;

class StoreTeacherAction
{
    /**
     * @param StoreTeacherDTO $dto
     * @return mixed
     * @throws Exception
     */
    public function execute(StoreTeacherDTO $dto): mixed
    {
        DB::beginTransaction();
        try {
            $teacher = User::create([
                'employee_id_number' => $dto->getEmployeeIdNumber(),
                'login' => $dto->getEmployeeIdNumber(),
                'password' => $dto->getEmployeeIdNumber(),
                'firstname' => $dto->getFirstname(),
                'lastname' => $dto->getLastname(),
                'surname' => $dto->getSurname(),
            ]);

            $teacher->profile()->create([
                'phone' => $dto->getPhone(),
                'type' => $dto->getType(),
                'university_id' => $dto->getUniversityId(),
            ]);
        }catch (Exception $exception){
            DB::rollBack();
            throw $exception;
        }
        DB::commit();

        return $teacher;
    }
}
