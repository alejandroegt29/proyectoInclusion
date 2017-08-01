@extends('masterPages.index_mp')

@section('content')
<br><br><br><br><br><br>
<div class="container papel-color space">
<p class="centrado-texto animated flipInY ">Caracteristicas</p>
<hr>
	<div class="row">
		<div class="col-md-offset-1 col-md-5">
			<!--<img id="botella" src="imagenes/alfajores.png" class="img-responsive som" alt="">-->
			<div class="item">
  				<img src="imagenes/alfajores.png" alt="">
  				<div class="item-overlay top"></div>
			</div>
		</div>
		<div class="col-md-5 papel-color borde-bttm">
			<p class="nom_pos">Nombre de producto</p>
			<p class="pre_pos" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum aut, iste totam non molestiae modi sapiente quas! Commodi, labore quaerat nam, nemo consequuntur iste, ipsum facere et tempora blanditiis pariatur!</p>
				
			<p class="pre_pos"><strong>Valor: </strong>$$$$$</p>
			<p class="area_pos"><strong>Area: </strong>Sabores de unpade</p>
			<p class="area_pos"><strong>Administrador: </strong>NombreAdmin</p>
			<p class="area_pos"><strong>Equipo: </strong> Nombre1, Nombre2, Nombre3</p>
			
			<button class="btn btn-jcss"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> | Añadir al carro</button>
			<button class="btn btn-jcss2"><i class="fa fa-money" aria-hidden="true"></i> | Comprar ahora</button>
		</div>
	</div>	
</div>

@endsection