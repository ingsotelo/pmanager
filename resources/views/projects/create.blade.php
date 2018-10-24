@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Agregar Nuevo Proyecto para <b>{{ $company->name }}</b></div>
            @include('partials.success')
            @include('partials.errors')
            <div class="card-body">
                    <form method="POST" action="{{ route('projects.store') }}">                       
                        @csrf


                       <input class="form-control"
                              type="hidden"
                              name="company-id"
                              value="{{ $company->id }}"
                        />


                        <div class="form-group row">
                            <label for="project-name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Proyecto:') }}</label>
                            <div class="col-md-6">
                                <input id="project-name" type="text" class="form-control{{ $errors->has('project-name') ? ' is-invalid' : '' }}" name="project-name" value="{{ old('project-name') }}" required autofocus>

                                @if ($errors->has('project-name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('project-name') }}</strong>
                                    </span>
                                @endif
                            </div>              
                        </div>


                        

                        <div class="form-group row">
                            <label for="project-description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion:') }}</label>
                            <div class="col-md-6">
                                <textarea style="resize: vertical"
                                          id="project-description"  
                                          name="project-description"
                                          class="form-control{{ $errors->has('project-description') ? ' is-invalid' : '' }}" 
                                          required>{{ old('project-description') }}</textarea>

                                @if ($errors->has('project-description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('project-description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      

                        <div class="form-group row">
                            <label for="project-days" class="col-md-4 col-form-label text-md-right">{{ __('Dias Estimados:') }}</label>
                            <div class="col-md-6">
                                <input id="project-days" type="text" class="form-control{{ $errors->has('project-days') ? ' is-invalid' : '' }}" name="project-days" value="{{ old('project-days') }}" required autofocus>

                                @if ($errors->has('project-days'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('project-days') }}</strong>
                                    </span>
                                @endif
                            </div>              
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> 
                                    {{ __('Guardar') }}
                                </button>
                                <a class="btn btn-primary btn-sm" href="/companies/{{ $company->id }}">
                                    <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i>
                                    {{ __('Regresar') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
          </div>          
        </div>    
    </div>
</div>

@endsection