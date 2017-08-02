<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inicio::..</title>
	@include('rutasCss.rutascss')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="js/modernizr.custom.js"></script>

</head>
<body class="animated fadeIn" onMouseMove="stopScroll();">
<div class="loader"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=333057497157245";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="header agileinfo-header navbar-fixed-top"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.html">Unpade<span>.ltda</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="/" class="w3ls-hover active">Inicio</a></li>
							<li><a href="nosotros" class="btn w3ls-hover">Nosotros</a></li>   
							<li><a href="contacto" class="btn w3ls-hover">Contacto</a></li>
							<li><a href="#" class="dropdown-toggle btn w3ls-hover" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Novedades <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="icons.html">Productos</a></li>
									<li><a href="codes.html">Servicios</a></li>     
								</ul>
							</li>  
							<li><a id="activarcomadnovoz" href="#" class="btn w3ls-hover"><div class="ico-help"></div></a></li>
						</ul>	   
						
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	

	@yield('content')

<footer class="">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 footerleft ">
        <div class="logofooter"> <img src="imagenes/logounpade.png" height="100" alt=""></div>
        <p>Ponte en contacto con nosotros.</p>
        <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
        <p><i class="fa fa-phone"></i> Fono (Chile) : 43 – 2321331</p>
        <p><i class="fa fa-envelope"></i> Correo Electronico : iunpadela@gmail.com</p>
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LINKS INTERESANTES</h6>
        <ul class="footer-ul">
          <li><a href="#" data-toggle="modal" data-target="#modalLogin"> Iniciar sessión</a></li>
          <li><a href="#"> Registro</a></li>
          <li><a href="#"> Productos y servicios</a></li>
          <li><a href="#"> Sabores de Unpade</a></li>
          <li><a href="#"> Sonrisas de Unpade</a></li>
          <li><a href="#"> Arteamano</a></li>
        </ul>
      </div>
      
      <div class="col-md-offset-1 col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/Unpadelosangeles/" data-width="200" data-height="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Unpadelosangeles/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Unpadelosangeles/">Unpade - Los Angeles</a></blockquote></div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>©Copyright (c) 2017 UNPADE.</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li>Apoyados por</li>
        <li><a href="#">www.exod.cl</a></li>
        
      </ul>
    </div>
  </div>
</div>


	@include('rutasJs.rutasjs')
    <script src="js/rutas-index.js" ></script>
</body>
</html>