@extends('layouts.web')

@section('content')

<div id="qs1">
    <div class="container">
        <h4>¿QUIENES SOMOS?</h4>
        <div class="row justify-content-center">                
          <p><strong>SOTELO Y SALGADO CONSULTORES S.C</strong>, es una firma que ofrece servicios profesionales de consultoría en las áreas fiscal, legal, administrativa y de negocios en el sector público y privado. 
          El personal que lo integra, cuenta con amplia experiencia en temas contables, financieros y jurídicos ya que se han desarrollado profesionalmente en puestos gerenciales en el sector privado y de mando en el sector público tanto a nivel federal como estatal. </p>
        </div>
    </div>
</div>

<div id="qs2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h4>MISIÓN</h4>
                <p>Ofrecer servicios contables, financieros y jurídicos que respondan a las necesidades de la iniciativa privada y el sector publico;  con calidad, compromiso social y confianza, brindando satisfacción a los clientes, trabajadores e inversionistas.</p>
            </div>

            <div class="col-md-4">
                <h4>VALORES</h4>
                <ul class="list-unstyled">
                  <li>Lealtad.</li>
                  <li>Honestidad.</li>
                  <li>Responsabilidad.</li>
                  <li>Respeto.</li>
                  <li>Solidaridad.</li>
                </ul>                         
            </div>

            <div class="col-md-4">

                <h4>VISIÓN</h4>
                <p>Ser una empresa reconocida porque nuestros servicios ayudan a lograr mejores resultados a nuestros clientes, maximizando nuestros recursos, con innovación y mejora continua.</p>
            </div>
        </div>
        <br>
    </div>
  </div>

@endsection

@section('scripts')
<script type="text/javascript">

    $(".about").addClass("active");

</script>
@endsection