<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id = null)
    {


        if($company_id != null ){

            $company = Company::find($company_id);
            return view('projects.create',['company'=>$company]);
           
         }
 
         return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $project = Project::create([
                'name' => $request->input('project-name'),
                'description' => $request->input('project-description'),
                'company_id' => $request->input('company-id'),
                'user_id' => Auth::id(),
                'days' => $request->input('project-days')
                
            ]);

            if($project){

                return redirect()->route('companies.show',['company' => $request->input('company-id')])
                ->with('success' , 'Se agrego un nuevo proyecto a la base de datos.');
                
            }else{

                return back()->withInput()->with('error', 'No se pudo crear un nuevo proyecto.');

            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        $company = Company::find($project->company_id);

        return view('projects.show', ['project'=>$project, 'company'=>$company]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
    /*
        $project = Project::find($project->id);
        
        return view('projects.edit', ['project'=>$project]);
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        /*
          $projectUpdate = Project::where('id', $project->id)
                                    ->update([
                                            'name'=> $request->input('project-name'),
                                            'description'=> $request->input('project-description'),
                                            'address'=> $request->input('project-address'),
                                            'representative'=> $request->input('project-representative'),
                                            'phone'=> $request->input('project-phone'),
                                            'email'=> $request->input('project-email')        
                                    ]);
          if($projectUpdate){
          
            return back()->withInput()->with('success' , 'La información del cliente se actualizo exitosamente.');
          }

          return back()->withInput()->with('error' , 'La informacion del cliente no se pudo actualizar.');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        /*
        $findproject = Project::find( $project->id);
        if($findproject->delete()){            
            return redirect()->route('projects.index')
            ->with('success' , 'El cliente se elimino de la base de datos.');
        }
        
        return back()->withInput()->with('error' , 'El cliente no pudo ser eliminado de la base de datos.');
        */
    }
}
