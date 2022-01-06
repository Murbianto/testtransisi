<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Imports\EmployeesImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AllEmployees extends Controller
{
    //
    public function index(){
      
          
        $getEmployees = Employees::join('companies as c','c.companies_id','=','employees.companies_id')
                        ->paginate(5);
     
        $data['employees'] = $getEmployees;
        return view('allemployees',$data);
    }
    public function importexcel(){
      
        Excel::import(new EmployeesImport,request()->file('file'));
           
        return back();
    }
}
