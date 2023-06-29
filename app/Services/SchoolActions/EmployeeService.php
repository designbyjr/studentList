<?php

namespace App\Services\SchoolActions;
use App\Helpers\ObjectConversion;
use App\Services\SchoolService;
use Wonde\Endpoints\Schools;

class EmployeeService extends SchoolService
{
    Use ObjectConversion;
    // list all employees "Classroom Teacher"

    /**
     * @param Schools $school
     * @return mixed
     */
    public function listTeachers(Schools $school){
        $employees = $school->employees->all([],["has_class"=>true]);
        return $employees;
    }

    public function listTeachersClassesById(string $id,Schools $school){
        $employees = $school->employees->get($id,["classes"],["has_class"=>true]);
        return $employees;
    }

}
