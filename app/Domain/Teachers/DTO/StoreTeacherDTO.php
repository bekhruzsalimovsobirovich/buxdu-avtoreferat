<?php

namespace App\Domain\Teachers\DTO;

class StoreTeacherDTO
{
    private string $university_id;
    private string $firstname;
    private string $lastname;
    private string $surname;
    private string $phone;
    private string $type;
    private int $employee_id_number;

    public static function fromArray(array $data)
    {
        $dto = new self();
        $dto->setUniversityId($data['university_id']);
        $dto->setFirstname($data['firstname']);
        $dto->setLastname($data['lastname']);
        $dto->setSurname($data['surname']);
        $dto->setPhone($data['phone']);
        $dto->setType($data['type']);
        $dto->setEmployeeIdNumber($data['employee_id_number']);
        return $dto;
    }

    /**
     * @return string
     */
    public function getUniversityId(): string
    {
        return $this->university_id;
    }

    /**
     * @param string $university_id
     */
    public function setUniversityId(string $university_id): void
    {
        $this->university_id = $university_id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getEmployeeIdNumber(): int
    {
        return $this->employee_id_number;
    }

    /**
     * @param int $employee_id_number
     */
    public function setEmployeeIdNumber(int $employee_id_number): void
    {
        $this->employee_id_number = $employee_id_number;
    }
}
