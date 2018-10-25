@extends('layouts.web')

@section('styles')
<style type="text/css">

	#menu {
	    padding-top: 60px;
	    padding-bottom: 35px;
	}

	#menu h3 {
	  
	    text-align:center;

	}

	#menu h4 {
	    font-size: 15px;
	    text-align:center;
	    font-weight: 700;
	    background:rgba(0,0,0,0.5);
	    padding-bottom: 20px;

	}

	#menu i {
	    padding-top: 30px;
	    padding-bottom: 30px;
	    color: #ffffff;
	    font-size: 90px;
	    display: inline-block;
	    width: 100%;
	    text-align:center;
	    background:rgba(0,0,0,0.5);

	}

	#menu p {
	    text-align:center;
	    display: inline-block;
	    width: 100%;
	}

	#menu a {
	  text-decoration: none;
	  display: inline-block;
	  width: 100%;
	  color: black;
	}

	#menu a:hover {
	  position: relative;
	  color: blue;
	}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">



@section('content')

<div id="qs1">
    <div class="container">
        <h4>¿QUE SERVIOS OFRECEMOS?</h4>
        <div class="row justify-content-center">                
          <p>Nuestra cartera de servicios innovadores para gobiernos, instituciones y organizaciones asociadas en los sectores público y privado cubre una serie de soluciones basadas en la calidad y excelencia en servicio. Contamos con planes de trabajo que se adaptan a sus necesidades, asistencia personalizada, adaptación de los sistemas a las nuevas tecnologías, .</p>
        </div>
    </div>
</div>

<div id="menu">
    <div class="container">
        <h3>SERVICIOS PARA EL SECTOR PRIVADO</h3>
                <br><br>
            <div class="row justify-content-center">                              

                <div class="col-md-3 enterleave">
                    <a href="#"> 
                       	<i class="fas fa-calculator"></i>
                        <p>Contabilidad en General</p>
                    </a>
                </div>
                

                <div class="col-md-3 enterleave">
                    <a href="#"> 
                        <i class="fas fa-file-contract"></i>
                        <p>Asesoría Fiscal y Legal</p>
                    </a>
                </div>

                <div class="col-md-3 enterleave">
                    <a href="#"> 
                        <i class="fas fa-money-check-alt"></i>
                        <p>Asesoría Financiera</p>
                    </a>
                </div>

                <div class="col-md-3 enterleave">
                    <a href="#"> 
                        <i class="fa fa-laptop"></i> 
                        <p>Asesoría Jurídico corporativa</p>
                    </a> 
                </div>

            </div>
    </div>
</div>

<div id="menu">
    <div class="container">
        <h3>SERVICIOS PARA EL SECTOR PUBLICO</h3>
                <br><br>
            <div class="row justify-content-center">                              

                <div class="col-md-4 enterleave">
                    <a href="#"> 
                       	<i class="fas fa-undo-alt"></i>
                        <p>GESTION PARA DEVOLUCION DE INCENTIVOS DE LA LEY DE COORDINACION FISCAL FEDERAL.</p>
                    </a>
                </div>
                

                <div class="col-md-4 enterleave">
                    <a href="#"> 
                        <i class="fas fa-book"></i>
                        <p>MANUAL DE CONTROL INTERNO PARA DEPENDENCIAS Y/O ENTIDADES.</p>
                    </a>
                </div>

                <div class="col-md-4 enterleave">
                    <a href="#"> 
                        <i class="fas fa-chart-pie"></i>
                        <p>DIAGNÓSTICO DE DESARROLLO SOCIAL EN EL ESTADO.</p>
                    </a>
                </div>

                <div class="col-md-4 enterleave">
                    <a href="#"> 
                        <i class="fas fa-chart-line"></i> 
                        <p>ANÁLISIS DE LOS RECURSOS HUMANOS Y SU IMPACTO EN LAS FINANZAS DEL ESTADO.</p>
                    </a> 
                </div>

                <div class="col-md-4 enterleave">
                    <a href="#"> 
                        <i class="fas fa-university"></i> 
                        <p>PLANEACIÓN Y EJECUCIÓN DEL FONDO DE APORTACIONES PARA LA INFRAESTRUCTURA SOCIAL MUNICIPAL Y DE LAS DEMARCACIONES TERRITORIALES DE LA CIUDAD DE MÉXICO.</p>
                    </a> 
                </div>

                <div class="col-md-4 enterleave">
                    <a href="#"> 
                        <i class="fas fa-check-double"></i>
                        <p>EVALUACIONES MUNICIPALES.</p>
                    </a> 
                </div>

            </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$( "div.enterleave" )
  		.mouseenter(function() {
   		$( this ).addClass('animated pulse');
  	})
  		.mouseleave(function() {
   		$( this ).removeClass('animated pulse');
  	});

  	$(".services").addClass("active");

</script>
@endsection
