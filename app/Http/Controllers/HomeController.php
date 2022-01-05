<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getCompany = Companies::paginate(5);
      
        $data['company'] = $getCompany;
        return view('home',$data);
    }
    public function addcompany(){

        return view('addcompany');
    }
    public function createcompany(Request $request){
      
        $nama = $request->input('nama');
        $email = $request->input('email');
        $logo = $request->input('logo');
        $website = $request->input('website');
        
        $companies = new Companies();
        $companies->name = $nama;
        $companies->email = $email;
        $companies->logo = $logo;
        $companies->website = $website;

        $success = $companies->save();
  
        return Redirect::route('home');
       // return view('createcompany');
    }
    public function deletecompany($id){

        $companies = Companies::find($id);
    	$companies->delete();
        return back();
    }
    public function editcompany($id){

        $companies = Companies::find($id);
    
    	$data['company'] = $companies;
        return view('editcompany',$data);
    }
    public function updatecompany(Request $request){

        $id = $request->input('companiesid');
        $name = $request->input('nama');
        $email = $request->input('email');
        $logo = $request->input('logo');
        $website = $request->input('website');

        Companies::where('companies_id', $id)->update([
        'name' => $name,
        'email' => $email,
        'logo' => $logo,
        'website' => $website
      ]);


    
      return Redirect::route('home');
    }
}
