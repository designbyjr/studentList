<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $schoolClass = new \App\Services\SchoolService();
        $school = $schoolClass->getSchool("A1930499544");
        $teachers = (new \App\Services\SchoolActions\EmployeeService())->listTeachers($school);
        return view('teachers',compact('teachers'));
    }
}
