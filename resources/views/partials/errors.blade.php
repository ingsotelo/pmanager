@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissable fade show" role="alert">
    	<strong>Algo salio mal!</strong> {!! session()->get('error') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif