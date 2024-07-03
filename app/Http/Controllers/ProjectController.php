<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('project');
    }

    public function store(Request $request) {
        Project::create([
            'name' => $request->name,  
        ]);
       
        // $r =  $request->all();

        // unset($r['_token']);
       
        // Product::create($r);

        //Product::create($request->except('_token'));
        
        //Product::create($request->only('name', 'price'));
        
        $project = new Project();

        $project->name = $request->name;
        return 'created';
    }
}
