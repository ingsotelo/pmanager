@extends('layouts.web')

@section('content')

  <div id="headerwrap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>Brindamos un servicio de la más</h1>
          <h2>alta calidad</h2>
        </div>
      </div>
    </div>
  </div>   

  <div id="w">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="{{ asset('img/img1300x200.jpg') }}" class="rounded mx-auto d-block shadow">
                <h4>SERVICIOS CONTABLES FISCALES</h4>
                <p>Ante los constantes cambios que experimenta la legislación fiscal mexicana, tanto empresas como personas requieren asesoría contable y fiscal en todas las ramas tributarias. Nuestros expertos en Impuestos ofrecen una amplia gama de servicios contables y fiscales. </p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/img3300x200.jpg') }}" class="rounded mx-auto d-block shadow">
                <h4>AUDITORIA FISCAL Y FINANCIERA</h4>
                <p>Nuestro servicio de Auditoría Financiera supera los enfoques de los despachos y empresas de auditoria tradicionales. La experiencia acumulada y la tecnología de punta que utilizamos nos permiten una visión más amplia sobre los elementos auditables.</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/img2300x200.jpg') }}" class="rounded mx-auto d-block shadow">
                <h4>ASESORÍA DE NEGOCIOS</h4>
                <p>Nuestra práctica en Asesoría de Negocios orientada hacia las personas, los procesos y la totalidad del negocio, proporciona estrategias globales para cubrir las necesidades de Dirección, Administración, Sistemas e Información Financiera a empresas medianas y pequeñas. </p>
            </div>
        </div>
        <br>
    </div>
  </div>

  <div id="wb">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <h4>CONTADORES PÚBLICOS CERTIFICADOS</h4>
                  <p>Un contador puede optar por la certificación de un Organismo Profesional en la materia, como es el Instituto Mexicano de Contadores Públicos (IMCP). Esta certificación consiste en que se otorga una constancia donde se indica que el profesional cuenta con los conocimientos y habilidades requeridos y vigentes para ejecer, previamente debe realizar un exámen y cumplir con diversos requisitos.</p>
              </div>
              <img src="img/munter2.png" class="rounded mx-auto d-block" >
              
          </div>
      </div>
  </div>

  <div id="lg">
    <div class="container">
        <h4>ALGUNOS DE NUESTROS CLIENTES</h4>
        <div class="row justify-content-center">                
          <div class="col-md-2">
            <a href="#"><img src="img/c01.gif"></a>
          </div>
          <div class="col-md-2">
            <a href="#"><img src="img/c02.gif"></a>
          </div>
          <div class="col-md-2">
            <a href="#"><img src="img/c03.gif"></a>
          </div>
          <div class="col-md-2">
            <a href="https://ingenieriaensoluciones.com/"><img src="img/c04.gif"></a>
          </div>
          <div class="col-md-2">
            <a href="http://guerrero.gob.mx/"><img src="img/c05.gif"></a>                    
          </div>                
        </div>
    </div>
  </div>

@endsection

@section('scripts')

<script type="text/javascript">

    $(".home").addClass("active");

</script>

@endsection