<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $companies = Company::all();

        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('companies.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check()){ // The user is logged in...
            $company = Company::create([
                'name' => $request->input('company-name'),
                'description' => $request->input('company-description'),
                'address' => $request->input('company-address'),
                'representative' => $request->input('company-representative'),
                'phone' => $request->input('company-phone'),
                'email' => $request->input('company-email'),
                'user_id' => Auth::id()
            ]);
            if($company){
                return redirect()->route('companies.index')
                ->with('success' , 'Se agrego un nuevo cliente a la base de datos.');
            }
        }
        
        return back()->withInput()->with('error', 'No se pudo crear un nuevo cliente');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        
        return view('companies.show', ['company'=>$company]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
            
        return view('companies.edit', ['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
 
          $companyUpdate = Company::where('id', $company->id)
                                    ->update([
                                            'name'=> $request->input('company-name'),
                                            'description'=> $request->input('company-description'),
                                            'address'=> $request->input('company-address'),
                                            'representative'=> $request->input('company-representative'),
                                            'phone'=> $request->input('company-phone'),
                                            'email'=> $request->input('company-email')        
                                    ]);
          if($companyUpdate){
            /*
              return redirect()->route('companies.show', ['company'=> $company->id])
              ->with('success' , 'Información actualizada exitosamente.');
            */
            return back()->withInput()->with('success' , 'La información del cliente se actualizo exitosamente.');
          }

          return back()->withInput()->with('error' , 'La informacion del cliente no se pudo actualizar.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        
        $findCompany = Company::find( $company->id);
        if($findCompany->delete()){            
            return redirect()->route('companies.index')
            ->with('success' , 'El cliente se elimino de la base de datos.');
        }
        
        return back()->withInput()->with('error' , 'El cliente no pudo ser eliminado de la base de datos.');
    }
}
