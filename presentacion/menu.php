<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="index.php"><img src="images/ie.png" width="150" height="150"/></a></div>
      <div class="">
        <h1 align="center">Informe Esencial -Backend-</h1>
      </div>

      <div class="social_plus_search" align="center">
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" placeholder="Buscar" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>

    <!-- Aca comienza el encabezado de las categorias principales -->
    <div class="main_menu_area">
      <ul id="nav">

        <li><a>Listados</a>
          <ul>
            <li><a href="listart.php">Noticias de hoy</a></li>
            <li><a href="#">Noticias destacadas</a></li>

            <li><a href="#">Por edicion</a></li>

            <li><a href="#">Por categoria</a>
              <ul>
                <li><a href="#">Deporte</a></li>
                <li><a href="#">Mundo</a></li>
                <li><a href="#">Cultura</a></li>
                <li><a href="#">Salud</a></li>
              </ul>
            </li>

          </ul>
        </li>

        <li><a href="#">Usuarios</a>
          <ul>
            <li><a href="listarusu.php">Listar</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Sancionar</a></li>
            <li><a href="#">Borrar</a></li>
          </ul>
        </li>

        <li><a href="#">Articulo</a>
          <ul>
            <li><a href="listararticulo.php">Listar</a></li>
            <li><a href="altaarticulo.php">Crear</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Borrar</a></li>
          </ul>
        </li>

        <li><a href="#">Administradores</a>
          <ul>
            <li><a href="listaradmin.php">Listar</a></li>
            <li><a href="crearadmin.php">Crear</a></li>
            <li><a href="#">Modificar</a></li>
            <li><a href="#">Borrar</a></li>
          </ul>
        </li>

        <li><a href="#">Publicidad</a>
        <ul>
          <li><a href="altapublicidad.php">Crear</a></li>
          <li><a href="listarpublicidad.php">Modificar</a></li>
          <li><a href="#">Borrar</a></li>
        </ul>
        </li>

        <li><a href="https://informeesencial.wordpress.com/">Blog</a></li>

        <li><a href="#">Configuraciones</a>
          <ul>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="#">Reclamos</a>
            <li><a href="#">Configuracion del sitio</a></li>
              <ul>
                <li><a href="#">Urgentes</a></li>
                <li><a href="#">Nuevo</a></li>
                <li><a href="#">Pendientes</a></li>
                <li><a href="#">Finalizados</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a>Cerrar Sesion</a></li>

      </ul>
    </div>
<!-- Aca termina -->
