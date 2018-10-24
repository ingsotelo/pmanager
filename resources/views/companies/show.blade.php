 @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Cliente No. {{ $company->id }}</div> 
              @include('partials.success')
              <div class="jumbotron">
                <h1 class="display-4">{{ $company->name }}</h1>
                <p class="lead">{{ $company->description }}</p>
                <hr class="my-4">
                <p>Direccion: {{ $company->address }}</p>
                <p>Contacto: {{ $company->representative }} {{ $company->phone }} {{ $company->email }}</p>
              </div>
              <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Proyecto</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Tareas</th>
                      <th scope="col">Consultores</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($company->projects as $project)
                      <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td><a href="/projects/{{ $project->id }}"> {{ $project->name }} </a></td>
                        <td>{{$project->description}}</td>
                        <td>1/10 (10%)</td>
                        <td>2</td>                
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="form-group row">
                  <div class="col-md-8 offset-md-1">
                    
                    <a class="btn btn-primary btn-sm" href="/projects/create/{{ $company->id }}">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    Nuevo Proyecto</a>

                    <a  class="btn btn-primary btn-sm" href="/companies">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    Regresar
                    </a>

                    
                  </div>
              </div>
            </div>          
        </div>    
    </div>
</div>

@endsection



                  