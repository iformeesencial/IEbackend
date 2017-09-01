<?php
//carga el menu de otro archivo para ahorrar codigo
require_once('menu.php');
 ?>
<title>Nuevo admin</title>

<h1>Formulario de registro de administrador</h1>
 <div class="content_area">
   <div align="center">
     <div class="left_coloum floatleft">

<!-- Aca empieza el cosito del login -->
      <div align="center">
        <div>
          <div class="news-letter">
            <h2>Ingrese datos de administrador</h2>
            <p>Ingrese los datos para el nuevo administrador</p>
            <form action="#" method="post">

              <input type="text" placeholder="Nombre" id="name" />
              <input type="text" placeholder="Apellido" id="name" />
              <input type="text" placeholder="Correo electronico" id="email" />
              <input type="text" placeholder="Teléfono" id="name" />
                <p>Tipo de administrador</p>
                <input type="radio" name="group1" value="1" checked>Administrador -A<br>
                <input type="radio" name="group1" value="2">Administrador -B<br>
                <input type="radio" name="group1" value="2">Administrador -C<br>
                <input type="radio" name="group1" value="2">Administrador -D<br>

                <div class="content_area">
                  <div class="">
                    <div class="left_coloum floatleft">

                    </div>
                  </div>
                </div>

              <input type="password" placeholder="Contrasena" id="name" />
              <input type="password" placeholder="Confirma Contrasena" id="name" />
              <input type="submit" value="Crear" id="form-submit" />
            </form>
          </div>
        </div>
<!-- Aca termina -->

<!-- Aca empieza la publicidad -->
      </div>
    </div>
    </div>
<!-- Aca termina -->


<div class="content_area">
  <div class="">
    <div class="left_coloum floatleft">

    </div>
  </div>
</div>

<!-- Aca empieza las categorias chiquitas del pie de pagina -->
    <div class="footer_bottom_area" align="center">
      <div class="copyright_text">
        <p>Copyright &copy; 2017 Informe Esencial Todos los derechos reservados | Design by Nachito</a></p>
        <p>Informe Esencial se reserva estrictamente de que no se hace cargo de nada.</p>
      </div>
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
