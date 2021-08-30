<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Company;
use App\Models\Project;

class CompanyController extends Controller
{
    //
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        $companyList = Company::get();
        
        $data['companyList'] = $companyList;

        return view('company',$data);
    }

    public function projectList($id)
    {

        $projectList = Company::find($id)->project;

        $data['projectList'] = $projectList;

        return view('company',$data);
    
    }
    
    public function commentList($id)
    {

        $commentList = Project::find($id)->comment;

        $data['commentList'] = $commentList;

        return view('company',$data);
    
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        Company::create($request->all());
     
        return redirect()->route('list')->with('success','Created successfully.');
    }

    public function destroy($id)
    {
        Company::find($id)->delete();
    
        return redirect()->route('list')->with('success','Deleted successfully');
    }
}
