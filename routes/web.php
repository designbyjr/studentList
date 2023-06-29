<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $schoolClass = new \App\Services\SchoolService();
    $school = $schoolClass->getSchool("A1930499544");
    $teachers = (new \App\Services\SchoolActions\EmployeeService())->listTeachers($school);
    return view('teachers',compact('teachers'));
    //$schoolClass = new \App\Services\SchoolService();
    //$school = $schoolClass->getSchool("A1930499544");
    $classService = new \App\Services\SchoolActions\EmployeeService();
   // dd($classService->getClassStudents($school,"A618803651"));
    //dd( $classService->listTeachers($school) );
    //dd( $classService->listClassStudents("A571916931",$school));
    //dd($school->students->all());
    /*foreach($school->employees->all(["classes"]) as $e){

        if(!empty($e->classes->data)) {
            foreach ($e->classes->data as $class) {

                if (!empty($class)) {
                  //  dd($class->id);
                    //$school->classes->get($class["id"],['students']);
                    dd($school->classes->get($class->id,['students']) );
                }
                //echo json_encode($class).PHP_EOL;
            }
        }
    }
    */
    //dd($school->attendance->get("e3a41fb0054e780081091d7dbd8e22a5"));
    /*
    $subjectsNamesBool = array_filter(iterator_to_array($school->subjects->all()),function ($a){
        return !is_null($a->name);
    });

    dd($subjectsNamesBool);
    */
});
