<?php
require_once('menu.php');
 ?>

<title>Nueva Publicidad</title>
<h1 align="center">Crear Publicidad</h1>

<!-- Aca empieza las noticias mas destacadas del deporte -->
  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="">
        <div class="" align="center">
  <!-- esto es para el centrado de las columnas -->

  <div>
    <h2 class="title">Formulario de nueva Publicidad</h2>

    <div align="center">

      <h3>Usuario propietario:</h3>
      <input type="text" placeholder="Correo de usuario" id="s" />
      </br></br>
      </p>

      <!-- formulario de cambio de imagen -->
             <div>
               <h3>Cargar imagen o Gif:</h3>
             <form enctype="multipart/form-data" action="" method="POST">
               <input name="uploadedfile" type="file"/>
             </form>
             </div>
     

      <h3>Tamaño:</h3>
        <select type="text" name="transporte">
          <option>120x50</option>
          <option>420x350</option>
          <option>600x400</option>
          </select>
        </br></br>

        <h3>Tipo:</h3>
        <select type="text" name="transporte">
          <option>Estatico</option>
          <option>Rotativo</option>
          </select>
        </br></br>

        <h3>Seccion:</h3>
          <select type="text" name="transporte">
            <option>Sector derecho1</option>
            <option>Sector derecho2</option>
            <option>Sector inferior</option>
            </select>
          </br></br>

        <h3>Categoria:</h3>
          <select type="text" name="transporte">
            <option>Deporte</option>
            <option>Salud</option>
            <option>Hogar</option>
            <option>Portada</option>
            <option>Todas</option>
            </select>
          </br></br>

      <input type="submit" value="Cancelar" id="form-submit" />
      <input type="submit" value="Crear" id="form-submit" />
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
