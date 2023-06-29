<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $schoolClass = new \App\Services\SchoolService();
        $school = $schoolClass->getSchool("A1930499544");
        $teachers = (new \App\Services\SchoolActions\EmployeeService())->listTeachers($school);
        return view('teachers',compact('teachers'));
    }
}
