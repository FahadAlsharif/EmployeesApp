<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    private $employees = Array (
        "0" => Array (
            "First Name" => "Tim",
            "Last Name"  => "Cook",
            "Company"=> "Apple"
        ),
        "1" => Array (
            "First Name" => "Satya",
            "Last Name"  => "Nadella",
            "Company"=> "Microsoft"
        ),
        "2" => Array (
            "First Name" => "Hopefully",
            "Last Name"  => "You",
            "Company"=> "Drovox"
        )
    );


    //function to display all the Employees
    function getEmployees() {
    return view('All',['employees'=> $this->employees]);
    }


    // function to display specific employee by his ID
    function getEmployeeById($id) {
        abort_if(!isset($this->employees[$id]), 404);
        $employe = $this->employees[$id];
        return view('Show')->with('employe',$employe);
    }
}
