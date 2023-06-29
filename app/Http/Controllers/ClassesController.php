<?php

namespace App\Http\Controllers;

use App\Services\SchoolActions\EmployeeService;
use App\Services\SchoolService;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function read(Request $request, string $id, $name)
    {
        $schoolClass = new SchoolService();
        $school = $schoolClass->getSchool("A1930499544");
        $employeeClass = new EmployeeService();
        $tClasses = $employeeClass->listTeachersClassesById($id,$school);
        $teachers = $employeeClass->listTeachers($school);
        return view('class',compact('tClasses',"school","employeeClass","teachers","name"));
    }


}
