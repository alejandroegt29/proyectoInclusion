<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Vertical Responsive Menu - Demonstration</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href='css/normalize.css' rel='stylesheet'>
  <link href='fontawesome/css/font-awesome.min.css' rel='stylesheet'>
  <link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
  <link href="bootstrap/css/demo.css" rel="stylesheet">
  <link rel="stylesheet" href="css/user_css.css">
  <link rel="stylesheet" href="css/animate.css">
</head>

<body>

  <header class="header clearfix">
 
    <button type="button" id="toggleMenu" class="toggle_menu">
      <i class="fa fa-bars"></i>
    </button>
    <div class="divfotomenu">
    		<img class="img-thumbnail img-perfil" src="{{Auth::user()->avatar}}" alt=""> <h1>{{ Auth::user()->name }}</h1>
    		| <a href="salir" >Salir</a>
    </div>
  </header>

  <nav class="vertical_nav">

    <ul id="js-menu" class="menu">
      <li class="menu--item">
        <a href="/" class="menu--link" title="Item 5">
          <i class="menu--icon  fa fa-fw fa-globe"></i>
          <span class="menu--label">Inicio</span>
        </a>
      </li>
      <li class="menu--item">
        <a href="misDatos" class="menu--link" title="Item 2">
           <i class="menu--icon  fa fa-fw fa-user"></i>
          <span class="menu--label">Mis Datos</span>
        </a>
      </li>

      <li class="menu--item">
        <a href="#" class="menu--link" title="Item 2">
          <i class="menu--icon  fa fa-fw fa-briefcase"></i>
          <span class="menu--label">Item 2</span>
        </a>
      </li>

      <li class="menu--item">
        <a href="#" class="menu--link" title="Item 3">
          <i class="menu--icon  fa fa-fw fa-cog"></i>
          <span class="menu--label">Item 3</span>
        </a>
      </li>

      <li class="menu--item  menu--item__has_sub_menu">

        <label class="menu--link" title="Item 4">
          <i class="menu--icon  fa fa-fw fa-database"></i>
          <span class="menu--label">Item 4</span>
        </label>

        <ul class="sub_menu">
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link">Submenu</a>
          </li>
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link">Submenu</a>
          </li>
          <li class="sub_menu--item">
            <a href="#" class="sub_menu--link">Submenu</a>
          </li>
        </ul>
      </li>

      <li class="menu--item">
        <a href="#" class="menu--link" title="Item 5">
          <i class="menu--icon  fa fa-fw fa-globe"></i>
          <span class="menu--label">Item 5</span>
        </a>
      </li>

    </ul>

    <button id="collapse_menu" class="collapse_menu">
      <i class="collapse_menu--icon  fa fa-fw"></i>
      <span class="collapse_menu--label">Recolher menu</span>
    </button>

  </nav>


  <div class="wrapper">

    <section>
      @yield('content')
    </section>

  </div>

  <script src="js/vertical-responsive-menu.min.js"></script>

</body>
</html>