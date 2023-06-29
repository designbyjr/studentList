<?php

namespace App\Services\SchoolActions;
use App\Helpers\ObjectConversion;
use Illuminate\Support\Arr;
use Wonde\Endpoints\Classes;
use Wonde\Endpoints\Schools;
use App\Services\SchoolService;
use Wonde\ResultIterator;

class ClassesService extends SchoolService
{
    use ObjectConversion;
    /**
     * @param Schools $school
     * @return mixed|\Psr\Http\Message\ResponseInterface|\Wonde\ResultIterator
     */
    public function listClasses(Schools $school){
        return $school->classes->all();
    }

    /**
     * @param Schools $school
     * @return array
     */
    public function listClassesWithStudents(Schools $school): array {
        $classes = $this->convert($school->classes->all(["students"]));
        return $classes["array"];
    }

    /**
     * @param string $id
     * @param Schools $school
     * @return array
     */
    public function getStudentsByClassId(string $id,Schools $school) : array
    {
        $class = $school->classes->get($id,['students']);
        return $this->convert($class->students->data);
    }

    /**
     * @param Schools $school
     * @return array
     */
    public function listClassesWithStudentsTeachers(Schools $school): array {
        $classes = $this->convert($school->classes->all(["students","employees"]));
        return $classes["array"];

    }

    /**
     * @param Schools $school
     * @return mixed
     */
    public function listClassesWithTeachers(Schools $school){

        $classes = $this->convert($school->classes->all(["employees"]));
        return $classes["array"];
    }

}
