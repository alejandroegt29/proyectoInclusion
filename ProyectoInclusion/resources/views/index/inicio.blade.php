@extends('masterPages.index_mp')


@section('content')
<div class="slider">
			<ul>
				<li>
  <img src="../imagenes/bebida0.png" alt="">
 </li>
				<li>
  <img src="../imagenes/jovenes0.png" alt="">
</li>
				<li>
  <img src="../imagenes/conejito.png" alt="">
</li>
				<li>
  <img src="../imagenes/mariposas.png" alt="">
</li>
			</ul>
</div>

<!-- Modal -->
<div id="modalLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--<div class="modal-content">
      <div class="modal-header blue">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-h4">Iniciar sesión</h4>
      </div>
      <div class="modal-body modal-centro">
        <label for="">Correo: </label><input class="form-control" type="text">
        <label for="">Clave: </label><input class="form-control" type="text">
        <br>
        <button class="btn btn-success">Iniciar</button>
        <br><br>
        <a class="a-fb" href="">Si no tienes una cuenta registrate aquí</a>
        <hr>
        <p class="p-fb">Ingresa con tu cuenta de Facebook</p>
        <a href="login/facebook" id="login" class="btn btn-primary"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> | Iniciar sesión</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>-->

  </div>
</div>
<div id="modalRegistro" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header blue">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-h4">Registrate</h4>
      </div>
      <div class="modal-body modal-centro">
        <label for="">Correo: </label><input class="form-control" type="text">
        <label for="">Clave: </label><input class="form-control" type="text">
        <br>
        <button class="btn btn-success">Iniciar</button>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

	<!--<div class="services"> 
		<div class="container">	 
			<h3 class="agileits-title">Novedades</h3>
			<div class="centeres">
				<div class="col-xs-offset-1 col-md-offset-3 col-xs-5 col-md-3 services-grids">
					<div class="w3agile-servs-img">
						<div class="icon-holder">
							<span class="fa fa-gears icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Productos</h4>
						<p class="description">Sceleris Prae </p>
					</div>
				</div>
				<div class="col-xs-5 col-md-3 services-grids">
					<div class="w3agile-servs-img">
						<div class="icon-holder">
							<span class="fa fa-group icon" aria-hidden="true"></span>
						</div>
						<h4 class="mission">Servicios </h4>
						<p class="description">Scele Praesent</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>	 			
		</div>	 			
	</div>	-->
	
<div class="row well">
	<div class="col-md-2 rsp">
		<img class="logo" src="imagenes/logounpade.png" height="50" width="80" alt="">
	</div>
	<div class="col-md-5">
		<div class="input-group">
		      <input type="text" id="example-2" class="form-control" rows="3" placeholder="Escriba aqui..." data-toggle="popover" title="Información" data-placement="bottom" data-trigger="hover" data-content="Este es el campo de entrada con el cual se define trabajara el teclado virtual" placeholder="Buscar...">
		      <span class="input-group-btn">
		        <button class="btn btn-success" type="button">Buscar!</button>
		      </span>
	    </div>
    
	</div>
	<div class="col-md-5">
		<ul class="nav nav-pills" role="tablist">
  			<li role="presentation"><a href="#">Todos <i class="fa fa-globe" aria-hidden="true"></i></a></li>
  			<li role="presentation"><a href="#">Cesta <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
  			<li role="presentation"><a href="sesion" >Sesion <i class="fa fa-user" aria-hidden="true"></i></a></li>
  			<li role="presentation"><a href="#" data-toggle="modal" data-target="#modalRegistro" >Registrar <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="menu-categoria verde">
			<ul>
				<li>Sabores</li>
				<li>Sonrisas</li>
				<li>ArteMano</li>
			</ul>
		</div>
	</div>
</div>

	<div class="row">
		<!--<div class="col-md-2">
			<select class="mip form-control select select-success" name="" id="">
				<option class="option1" value="">Categorias..</option>
				<option value="">valor1</option>
			</select>
			<div class="listado">
				<div class="listado-cabeza">
					<p><strong>Categoria <i class="fa fa-eye" aria-hidden="true"></i></strong></p>
					<hr class="linea2">
				</div>
				<div class="listado-cuerpo">
					<ul>
						<li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Cuadros</a></li>
						<li><a href="#"><i class="fa fa-superpowers" aria-hidden="true"></i> Tasas</a></li>
						<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> Relojes</a></li>
						<li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i> Comidas </a></li>
						<li><a href="#"><i class="fa fa-glass" aria-hidden="true"></i> bebidas</a></li>
					</ul>
				</div>
			</div>
			
		</div>-->
		<div class="col-md-12 papel-color">
				<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
					<p class="categoria">Productos y servicios</p>
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
					</div>
					<ul>
						<li>
							<a class="cbp-vm-image" href="verPoS"><img class="img-ajustar" src="imagenes/alfajores.png"></a>
							<h3 class="cbp-vm-title">Nombre Producto/servicio</h3>
							<div class="cbp-vm-price">$$$</div>
							<div class="cbp-vm-details">
								descripciones...
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="verPoS">Ver</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="#"><img class="img-ajustar" src="imagenes/bebdias2.png"></a>
							<h3 class="cbp-vm-title">Nombre Producto/servicio</h3>
							<div class="cbp-vm-price">$$$</div>
							<div class="cbp-vm-details">
								descripciones...
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="">Ver</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="#"><img class="img-ajustar" src="imagenes/canape.png"></a>
							<h3 class="cbp-vm-title">Nombre Producto/servicio</h3>
							<div class="cbp-vm-price">$$$</div>
							<div class="cbp-vm-details">
								descripciones...
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="#">Ver</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="#"><img class="img-ajustar" src="imagenes/dulces.png"></a>
							<h3 class="cbp-vm-title">Nombre Producto/servicio</h3>
							<div class="cbp-vm-price">$$$</div>
							<div class="cbp-vm-details">
								descripciones...
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="#">Ver</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="#"><img class="img-ajustar" src="imagenes/conejito.png"></a>
							<h3 class="cbp-vm-title">Nombre Producto/servicio</h3>
							<div class="cbp-vm-price">$$$</div>
							<div class="cbp-vm-details">
								descripciones...
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="#">Ver</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="#"><img class="img-ajustar" src="imagenes/maderita.png"></a>
							<h3 class="cbp-vm-title">Nombre Producto/servicio</h3>
							<div class="cbp-vm-price">$$$</div>
							<div class="cbp-vm-details">
								descripciones...
							</div>
							<a class="cbp-vm-icon cbp-vm-add" href="#">Ver</a>
						</li>
					</ul>
				</div>
				<nav aria-label="...">
				  <ul class="pager">
				    <li><a href="#">Anterior</a></li>
				    <li><a href="#">Siguiente</a></li>
				  </ul>
				</nav>
		</div>
	</div>
	<div class="row papel-color borde space animar">
		<div class="col-md-offset-1 col-md-10">
			<p class="centrado-texto">Nuestra Misión</p>
			<center><p class="centrado-texto-p2">
				Insertar laboralmente a nuestros alumnos a través de microempresa y/o empresas locales que ofrezcan reales oportunidad de inclusión laboral.
			</p>
				<img class="logo" src="http://www.esehjll.gov.co/wp-content/uploads/2016/04/mision.png" height="150" alt="">
			
			</center>
		</div>
	</div>
	<div class="row papel-color borde space animar2">
		<div class="col-md-offset-1 col-md-4 rsp ">
		<p class="centrado-texto">Nuestras Áreas</p>
			<div class="departamento">
				<a href="#"><img src="imagenes/sabores.png" alt="" height="100"></a>
				<a href="sonrisas"><img src="imagenes/sonrisas.png" alt="" height="100"></a>
				<a href="#"><img src="imagenes/sonrisas.png" alt="" height="100"></a>
			</div>
		</div>
		<div class="col-md-offset-1 col-md-4 img-back">
			<p class="centrado-texto-blanco">Noticias</p>
			<br><br><br><br><br>
			<button type="button" class="form-control btn btn-info">Ver Noticias | <i class="fa fa-book" aria-hidden="true"></i></button>
		</div>
	</div>
	<!--<div class="row papel-color space animar3">
		<div class="col-md-6">
			<div class="centrado-ico well">
				<i class="fa fa-money fa-4x" aria-hidden="true"></i>
				<p><h4>Calidad y precio</h4></p>
				<p class="pcolor">
					Precios muy competitivos en más de 100 millones de artículos.
				</p>
			</div>
			<div class="centrado-ico well">
				<i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
				<p><h4>Pagos seguros</h4></p>
				<p class="pcolor">
					Paga con los métodos más populares y seguros del mundo
				</p>
			</div>
			<div class="centrado-ico well">
				<i class="fa fa-shield fa-4x" aria-hidden="true"></i>
				<p><h4>Compra con confianza</h4></p>
				<p class="pcolor">
					Nuestra Protección del Comprador protege tu compra de principio a fin.
				</p>
			</div>
		</div>
	</div>-->
	<div class="row papel-color borde space fotostatic">
		<div class="col-md-offset-3 col-md-2 well centrado-ico">
			<!--<i class="fa fa-money fa-4x" aria-hidden="true"></i>-->
			<img src="ico/money.png" alt="">
			<p><h4>Calidad y precio</h4></p>
			<p class="pcolor">
				Precios muy competitivos en más de 100 millones de ridiculo.
			</p>
		</div>
		<div class="col-md-2 well centrado-ico">
			<!--<i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>-->
			<img src="ico/card.png" alt="">
			<p><h4>Pagos seguros</h4></p>
			<p class="pcolor">Paga con los métodos más populares y seguros del mundo</p>
		</div>
		<div class="col-md-2 well centrado-ico">
			<!--<i class="fa fa-shield fa-4x" aria-hidden="true"></i>-->
			<img src="ico/safe.png" alt="">
			<p><h4>Compra con confianza</h4></p>
			<p class="pcolor">Nuestra Protección del Comprador protege tu compra de principio a fin.</p>
		</div>
	</div>
	<script src="js/cbpViewModeSwitch.js"></script><!--util en el index -->
@endsection