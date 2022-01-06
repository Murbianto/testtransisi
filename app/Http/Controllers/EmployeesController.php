<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PDF;

class EmployeesController extends Controller
{
    //
    public function index($id)
    {
        
        $getEmployees = Employees::where('employees.companies_id',$id)
                        ->join('companies as c','c.companies_id','=','employees.companies_id')
                        ->paginate(5);
        
        $data['companyid'] = $id;
        $data['employees'] = $getEmployees;
        return view('listemployees',$data);
    }
    public function addemployees(){
        $getCompany = Companies::all();

        $data['company'] = $getCompany;
        return view('addemployees',$data);
    }
    public function createemployees(Request $request){
       
        $nama = $request->input('employeesname');
        $email = $request->input('email');
        $companies = $request->input('company');
        
        $companies = new Employees();
        $companies->employees_name = $nama;
        $companies->employees_email = $email;
        $companies->companies_id = $companies;

        $success = $companies->save();
  
        return Redirect::route('home');
    }

    public function deleteemployees($id){
       
        $companies = Employees::find($id);
    	$companies->delete();
        return back();
    }
    public function editemployees($id){
      
        $employees = Employees::find($id);
    
    	$data['employees'] = $employees;
        return view('editemployees',$data);
    }
    public function updateemployees(Request $request){

        $id = $request->input('employeesid');
        $name = $request->input('nama');
        $email = $request->input('email');

        Employees::where('employees_id', $id)->update([
        'employees_name' => $name,
        'employees_email' => $email
      ]);


    
      return Redirect::route('employees', array('id' => $id));
    }
    public function exportpdf($id){

        $getEmployees = Employees::where('employees.companies_id',$id)
        ->join('companies as c','c.companies_id','=','employees.companies_id')
        ->get();
        $getcompanyname = Companies::where('companies_id',$id)->first();
     
        $data = ['title' => 'Data Karyawan PT '.$getcompanyname->name,
                 'employee' =>$getEmployees,
                ];

        $pdf = PDF::loadView('exportpdf', $data);
  
        return $pdf->download('Data Karyawan PT'.$getcompanyname->name.'.pdf');
    }
    
}
