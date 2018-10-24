@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item"><a class="btn btn-primary btn-sm" href="/companies">Clientes</a></li>
                      <li class="list-group-item">Proyectos</li>
                      <li class="list-group-item">Consultores</li>
                      <li class="list-group-item">Tareas</li>
                    </ul>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
