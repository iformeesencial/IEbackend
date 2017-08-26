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
<div class="">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="index.php"><img src="images/ie.png" width="150" height="150"/></a></div>
      <h1>Informe Esencial -Backend-</h1>
    </div>

<title>-IE Backend-</title>
<h1 align="center">Ingrese informacion de administrador</h1>

  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="">
        <div class="" align="center">
  <!-- esto es para el centrado de las columnas -->

  <div>
    <h2 class="title">Login</h2>
    <div align="center">

      <form action="inicio.php" method="post">

        <h3>Correo electronico:</h3>
        <input type="text" placeholder="Correo electronico" id="email" />
        </br></br>
        </p>

        <h3>Contraseña:</h3>
        <input type="password" placeholder="Contrasena" id="email" />
        </br></br>
        </p>
        <input type="submit" value="Ingresar" id="form-submit" />
      </form>

      </br>
      </br>
      </br>
    </div>
    <!-- fin de una noticia -->

    <!-- Esto pone el margen  -->
    <h2 class="title"></h2>

  </div>

        </div>
      </div>

      <div class="sidebar floatright">

      </div>
    </div>

  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>
