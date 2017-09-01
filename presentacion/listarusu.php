<?php
require_once('menu.php');
 ?>

<title>Listar Usuarios</title>
<h1>Listado de usuarios del sistema</h1>

    <div class="content_area">
      <div class="main_content floatleft">
        <div class="rigth_coloum floatleft">

  <div>
    <h2 class="title">Filtros de busqueda</h2>

    <div align="center">
      <div>
        <div class="news-letter">
          <form action="#" method="post">

            <input type="text" placeholder="Nombre" id="name" />
            <input type="text" placeholder="Apellido" id="name" />
            <input type="text" placeholder="Correo electronico" id="email" />
            <input type="text" placeholder="Teléfono" id="name" />

            <input type="submit" value="Buscar" id="form-submit" />
          </form>
        </div>
      </div>

    </div>
    <div class="rigth_coloum floatleft">
      <h3>Resultado busqueda:</h3>
        <h3></h3>

        <p>Nombre y Apellido: Ignacio Gallardo.</p>
        <p>Correo electronico: ig@gmail.com </p>
        <p>Telefono: 2221358 </p>

      </br>
        <h3></h3>
        <a class="readmore" href="modiusu.php">Modificar</a>
        <a class="readmore" href="#">Sancionar</a>
        <a class="readmore" href="#">Borrar</a>
    </br>
    </br>
    </br>
    </div>

    <div class="rigth_coloum floatleft">
      <h3>Resultado busqueda:</h3>
        <h3></h3>

        <p>Nombre y Apellido: Ignacio Gallardo.</p>
        <p>Correo electronico: ig@gmail.com </p>
        <p>Telefono: 2221358 </p>

      </br>
        <h3></h3>
        <a class="readmore" href="modiusu.php">Modificar</a>
        <a class="readmore" href="#">Sancionar</a>
        <a class="readmore" href="#">Borrar</a>
    </br>
    </br>
    </br>
    </div>

    <div class="rigth_coloum floatleft">
      <h3>Resultado busqueda:</h3>
        <h3></h3>

        <p>Nombre y Apellido: Ignacio Gallardo.</p>
        <p>Correo electronico: ig@gmail.com </p>
        <p>Telefono: 2221358 </p>

      </br>
        <h3></h3>
        <a class="readmore" href="modiusu.php">Modificar</a>
        <a class="readmore" href="#">Sancionar</a>
        <a class="readmore" href="#">Borrar</a>
    </br>
    </br>
    </br>

    </div>
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
