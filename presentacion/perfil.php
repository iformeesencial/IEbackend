<?php
require_once('menu.php');
 ?>

<title>Perfil</title>
<h1 align="center">Perfil de administrador -Ignacio Gallardo-</h1>

<!-- Aca empieza las noticias mas destacadas del deporte -->
  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="">
        <div class="" align="center">
  <!-- esto es para el centrado de las columnas -->

  <div>
    <h2 class="title">Datos Personales</h2>

    <!-- una noticia -->
    <div align="center">

      <h3>Nombre y apellido:</h3>
      <p>Ignacio Gallardo
      </br></br>
      </p>

      <h3>Correo Electronico:</h3>
      <p>IG@informeesencial.com
      </br></br>
      </p>

      <h3>Telefono:</h3>
      <p>123456
      </br></br>
      </p>

      <h3>Tipo de administrador:</h3>
      <p>El mas Cheto ya sabe
      </br></br>
      </p>

      <a class="readmore" href="modiusu.php">Modificar</a>
      <a class="readmore" href="#">Borrar</a>
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



<!-- Aca empieza las categorias chiquitas del pie de pagina -->
<div class="copyright_text">
  <p>Copyright &copy; 2017 Informe Esencial Todos los derechos reservados | Design by Nachito</a></p>
  <p>Informe Esencial se reserva estrictamente de que no se hace cargo de nada.</p>
</div>
<!-- Aca termina -->


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
