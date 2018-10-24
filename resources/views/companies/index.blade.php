@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><i class="fas fa-building"></i> Mis Clientes</div>
                @include('partials.success')
                @include('partials.errors')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Proyectos</th>
                                      <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $company)
                                      <tr>
                                        <th scope="row">{{ $company->id }}</th>
                                        <td><a href="/companies/{{ $company->id }}" >  {{ $company->name }}</a></td>
                                        <td>3</td>
                                        <td><a href="/companies/{{ $company->id }}/edit"><i class="fas fa-edit" style="color:black"></i>Editar</a> 
                                        </td>
                                      </tr>
                                    @endforeach
                                </tbody>
                            </table>                        
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <a  class="btn btn-primary btn-sm" href="/companies/create">
                            <i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo Cliente
                            </a> 

                            <a  class="btn btn-primary btn-sm" href="/home">
                            <i class="fas fa-arrow-alt-circle-left"></i>
                            Regresar
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>        
    </div>
</div>
@endsection
