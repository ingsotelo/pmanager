@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Actualizar Cliente No. {{ $company->id }}</div>
            @include('partials.success')
            @include('partials.errors')
            <div class="card-body">
                    <form method="POST" action="{{ route('companies.update',[$company->id]) }}">
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="company-name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

                            <div class="col-md-6">
                                <input id="company-name" type="text" class="form-control{{ $errors->has('company-name') ? ' is-invalid' : '' }}" name="company-name" value="{{ $company->name }}" required autofocus>

                                @if ($errors->has('company-name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company-name') }}</strong>
                                    </span>
                                @endif
                            </div>              
                        </div>

                        <div class="form-group row">
                            <label for="company-description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion:') }}</label>

                            <div class="col-md-6">
                                <textarea style="resize: vertical"
                                          id="company-description"  
                                          name="company-description"
                                          class="form-control{{ $errors->has('company-description') ? ' is-invalid' : '' }}" 
                                          required>{{ $company->description }}</textarea>

                                @if ($errors->has('company-description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company-description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company-address" class="col-md-4 col-form-label text-md-right">{{ __('Direccion:') }}</label>

                            <div class="col-md-6">
                                <textarea style="resize: vertical"
                                          id="company-address"  
                                          name="company-address"
                                          class="form-control{{ $errors->has('company-address') ? ' is-invalid' : '' }}" 
                                          required>{{ $company->address }}</textarea>

                                @if ($errors->has('company-address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company-address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company-representative" class="col-md-4 col-form-label text-md-right">{{ __('Respresentante:') }}</label>

                            <div class="col-md-6">
                                <input id="company-representative" type="text" class="form-control{{ $errors->has('company-representative') ? ' is-invalid' : '' }}" name="company-representative" value="{{ $company->representative }}" required autofocus>

                                @if ($errors->has('company-representative'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company-representative') }}</strong>
                                    </span>
                                @endif
                            </div>              
                        </div>

                        <div class="form-group row">
                            <label for="company-phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono:') }}</label>

                            <div class="col-md-6">
                                <input id="company-phone" type="text" class="form-control{{ $errors->has('company-phone') ? ' is-invalid' : '' }}" name="company-phone" value="{{ $company->phone }}" required>

                                @if ($errors->has('company-phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company-phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="company-email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico:') }}</label>

                            <div class="col-md-6">
                                <input id="company-email" type="email" class="form-control{{ $errors->has('company-email') ? ' is-invalid' : '' }}" name="company-email" value="{{ $company->email }}" required>

                                @if ($errors->has('company-email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company-email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> 
                                    {{ __('Actualizar') }}
                                </button>

                                <a  class="btn btn-primary btn-sm" href="#" onclick="
                                  var result = confirm('¿Esta seguro de eliminar toda la informacion del cliente?');
                                  if( result ){
                                                event.preventDefault();
                                                document.getElementById('delete-form').submit();
                                              }
                                "><i class="fas fa-trash-alt"></i> Eliminar</a>
                               

                                <a class="btn btn-primary btn-sm" href="/companies">
                                <i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i>
                                {{ __('Regresar') }}
                                </a>

                            </div>

                             

                        </div>
                    </form>

                    <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                                  method="POST" style="display: none;">
                                   @method('DELETE')
                                   @csrf
                    </form>

                </div>
          </div>          
        </div>    
    </div>
</div>

@endsection