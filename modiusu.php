<?php
require_once('menu.php');
 ?>

<title>Perfil</title>
<h1 align="center">Perfil de usuario -Ignacio Gallardo-</h1>

<!-- Aca empieza las noticias mas destacadas del deporte -->
  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="">
        <div class="" align="center">
  <!-- esto es para el centrado de las columnas -->

  <div>
    <h2 class="title">Modificar Datos Personales</h2>

    <div align="center">

      <h3>Nombre y apellido:</h3>
      <input type="text" value="Ignacio Gallardo" id="s" />
      </br></br>
      </p>

      <h3>Correo Electronico:</h3>
      <input type="text" value="IG@informeesencial.com" id="s" />
      </br></br>
      </p>

      <h3>Telefono:</h3>
      <input type="text" value="123456" id="s" />
      </br></br>
      </p>

      <h3>Tipo de usuario:</h3>
      <p>Registro Web - Registro red social
      </br></br>

      <h3>Estado de usuario:</h3>
        <select type="text" name="transporte">
          <option>Activo</option>
          <option>Inactivo</option>
          </select>
        </br></br>

        <h3>Membrecia de usuario:</h3>
          <select type="text" name="transporte">
            <option>Membrecia1</option>
            <option>Membrecia2</option>
            <option>Membrecia3</option>
            </select>
          </br></br>

      <h3>Tipo de administrador:</h3>
        <select type="text" name="transporte">
          <option>Administrador del sistema</option>
          <option>Administrador del sistema</option>
          <option>Administrador del sistema</option>
          <option>Administrador del sistema</option>
        </select>
        </br></br>

      <input type="submit" value="Atras" id="form-submit" />
      <input type="submit" value="Terminar" id="form-submit" />
      </p>

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
