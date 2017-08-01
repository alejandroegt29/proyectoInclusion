@extends('masterPages.loged_mp')

@section('content')

<p class="user-tittle">Mis Datos</p>
<hr>
<div class="row animated fadeIn">
	<div class="col-md-5 ">
		<p><label for="">Nombre: </label><input disabled="false" class="user-nombre form-control" type="text" value="{{ Auth::user()->name }}"></p>
		<p><label for="">Telefono: </label><input  class=" form-control" type="text"></p>
		<p><label for="">Domicilio: </label><input  class=" form-control" type="text"></p>
		<button class="btn btn-info">
			<i class="fa fa-floppy-o" aria-hidden="true"></i> | Guardar
		</button>
	</div>
</div>


@endsection