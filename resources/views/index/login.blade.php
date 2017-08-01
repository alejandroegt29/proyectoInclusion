@extends('masterPages.index_mp')

@section('content')
	<div class="row papel-color borde space-top">
		<div class="col-md-offset-1 col-md-5 rsp ">
			<div class="modal-centro">
			<p class="centrado-texto animated flipInY ">Iniciar Sesión</p>
		        <label for="">Correo: </label><input class="form-control" type="text"/>
		        <label for="">Clave: </label><input class="form-control" type="text"/>
		        <br>
		        <button class="btn btn-success">Iniciar</button>
		        <br>
		        <a class="a-fb" href="">Si no tienes una cuenta registrate aquí</a>
		        <hr>
		        <p class="p-fb">Ingresa con tu cuenta de Facebook</p>
		        <a href="login/facebook" id="login" class="btn btn-primary"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> | Iniciar sesión</a>
		    </div>
		</div>
		<div class="col-md-5 centro-logo-user">
			<div class="vline" ></div>
			<img class="login-logo-user" src="ico/users.png" alt="">
		</div>
	</div>

	<!--<div class="row">
		<div class="col-md-6">
			<div class="modal-centro">
		        <label for="">Correo: </label><input class="form-control" type="text"/>
		        <label for="">Clave: </label><input class="form-control" type="text"/>
		        <br>
		        <button class="btn btn-success">Iniciar</button>
		        <br>
		        <a class="a-fb" href="">Si no tienes una cuenta registrate aquí</a>
		        <hr>
		        <p class="p-fb">Ingresa con tu cuenta de Facebook</p>
		        <a href="login/facebook" id="login" class="btn btn-primary"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> | Iniciar sesión</a>
		    </div>
		</div>
		<div class="col-md-6"></div>

	</div>-->
@endsection	