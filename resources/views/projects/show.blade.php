@extends('layouts.app')

@section('styles')
<style>
  #tableB {
      display: none;
  }
  #tableC {
      display: none;
  }
  #tableD {
      display: none;
  }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">Proyecto para: <b>{{ $company->name }}</b> Fecha de inicio: <b>{{ $project->created_at }}</b>
                <div class="float-right">   
                  <div class="dropdown d-inline-block">
                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-cogs"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Concluir Proyecto</a>
                      <a class="dropdown-item" href="#">Editar Proyecto</a>
                      <a class="dropdown-item" href="#">Agregar Tarea</a>
                      <a class="dropdown-item" href="#">Agregar Consultor</a>
                    </div>
                  </div>
                </div>  
              </div>
              @include('partials.success')

              <div class="card-body">
                <h1 >{{ $project->name }}</h1>
                <p class="lead">{{ $project->description }}</p>
                <hr>
                <div class="progress">
                  <div class="progress-bar progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"><b>75%</b></div>
                </div>
                <div class="row">
                  <div class="col-md-6"><i class="fas fa-tasks"></i> 3/5 </div>
                  <div class="col-md-6" style="text-align: right;"><i class="far fa-calendar-alt"></i> Faltan 3 Días </div>
                </div>
                <hr>
              </div>

              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active col-md-3" id="TabA">
                  <input type="radio" name="options" autocomplete="off" checked> Tareas
                </label>
                <label class="btn btn-secondary col-md-3" id="TabB">
                  <input type="radio" name="options" autocomplete="off"> Archivos
                </label>
                <label class="btn btn-secondary col-md-3" id="TabC">
                  <input type="radio" name="options" autocomplete="off"> Consultores
                </label>
                <label class="btn btn-secondary col-md-3" id="TabD">
                  <input type="radio" name="options" autocomplete="off"> Actividades
                </label>
              </div>
              
              <table class="table" id="tableA">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Tarea</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Consultor</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>Elaborar Expediente Tecnico</a></td>
                      <td>Presentar propuesta de el expediente tecnico en word para la licitacion No.3945</td>
                      <td>Yuridia Salado Castañeda</td>
                  </tr>
                  {{--
                    @foreach($project->projects as $project)
                      <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td><a href="/projects/{{ $project->id }}"> {{ $project->name }} </a></td>
                        <td>{{$project->description}}</td>
                        <td>1/10 (10%)</td>
                        <td>2</td>                
                      </tr>
                    @endforeach
                    --}}
                </tbody>
              </table>
            
              <table class="table" id="tableB">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Autor</th>
                    </tr>
                </thead>
                <tbody>
                 
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="#">Expediente Tecnico.docx</a>(15kb Archivo de Word)</td>
                        <td>Presentacion del expediente tecnico para la licitacion 27 paginas en total.</td>
                        <td>Yuridia Salado Castañeda</td>
                      </tr>

                </tbody>
              </table>

              <table class="table" id="tableC">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="#">Salomon Sotelo Suastegui</a></td>
                        <td>ing.sotelo@outlook.com</td>
                        <td>7471228241</td>
                      </tr>
                       <tr>
                        <th scope="row">2</th>
                        <td><a href="#">Yuridia Salado Castañeda</a></td>
                        <td>yuricas@outlook.com</td>
                        <td>7474197192</td>
                      </tr>
                </tbody>
              </table>

              <table class="table" id="tableD">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Consultor</th>
                      <th scope="col">Actividad</th>
                      <th scope="col">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Salomon Sotelo Suastegui</a></td>
                        <td>Añadio al proyecto a: Yuridia Salado Castañeda </td>
                        <td>Hoy</td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Salomon Sotelo Suastegui</a></td>
                        <td>Agrego una nueva tarea: crear expediente tecnico, asignada a: Yuridia Salado Castañeda</td>
                        <td>Hoy</td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Yuridia Salado Castañeda</a></td>
                        <td>Subio un nuevo archivo: Expediente Tecnico.docx</td>
                        <td>Hoy</td>
                      </tr>
                </tbody>
              </table>

              <div class="form-group row">
                  <div class="col-md-8 offset-md-1">
                    <a  class="btn btn-primary btn-sm" href="/companies/{{$company->id}}">
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

@section('scripts')
  <script type="text/javascript">
    $(function() {

      console.log( "ready!" );

      var tableA = document.getElementById("tableA");
      var tableB = document.getElementById("tableB");
      var tableC = document.getElementById("tableC");
      var tableD = document.getElementById("tableD");

      var btnTabA = document.getElementById("TabA");
      var btnTabB = document.getElementById("TabB");
      var btnTabC = document.getElementById("TabC");
      var btnTabD = document.getElementById("TabD");

      btnTabA.onclick = function () {
          tableA.style.display = "table";
          tableB.style.display = "none";
          tableC.style.display = "none";
          tableD.style.display = "none";
      }

      btnTabB.onclick = function () {
          tableA.style.display = "none";
          tableB.style.display = "table";
          tableC.style.display = "none";
          tableD.style.display = "none";
      }

      btnTabC.onclick = function () {
          tableA.style.display = "none";
          tableB.style.display = "none";
          tableC.style.display = "table";
          tableD.style.display = "none";
      }

      btnTabD.onclick = function () {
          tableA.style.display = "none";
          tableB.style.display = "none";
          tableC.style.display = "none";
          tableD.style.display = "table";
      }
  
    });  
  </script>
@endsection



                  