<?php
require_once('menu.php');
 ?>

<title>Nuevo Articulo</title>
<h1 align="center">Crear Articulo</h1>

<!-- Aca empieza las noticias mas destacadas del deporte -->
  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="">
        <div class="" align="center">
  <!-- esto es para el centrado de las columnas -->

  <div>
    <h2 class="title">Formulario de articulo nuevo</h2>

    <div align="center">

      <h3>Titulo:</h3>
      <input type="text" value="Titulo de noticia" id="s" />
      </br></br>
      </p>

      <h3>Sub-Titulo:</h3>
      <input type="text" value="Sub-Titulo de noticia" id="s" />
      </br></br>
      </p>

      <!-- formulario de cambio de imagen -->
             <div>
               <h3>Imagen de portada:</h3>
             <form enctype="multipart/form-data" action="" method="POST">
               <input name="uploadedfile" type="file"/>
             </form>
             </div>

      <h3>Resumen:</h3>
      <textarea rows=10 cols=50 placeholder="Resumen" ></textarea>
      </br></br>
      </p>

      <h3>Descripcion:</h3>
      <textarea rows=30 cols=100 placeholder="Descripcion" ></textarea>
      </br></br>
      </p>

      <h3>Categoria:</h3>
        <select type="text" name="transporte">
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          </select>
        </br></br>

      <h3>Estado de articulo:</h3>
        <select type="text" name="transporte">
          <option>Activo</option>
          <option>Inactivo</option>
          </select>
        </br></br>

        <h3>DESTACADA:</h3>
          <select type="text" name="transporte">
            <option>SI</option>
            <option>NO</option>
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
        <div class="footer_bottom_area" align="center">
          <div class="footer_menu">
            <ul id="f_menu">
              <li><a href="#">Internacionales</a></li>
              <li><a href="deporte.php">Deportes</a></li>
              <li><a href="#">Tecnologia</a></li>
              <li><a href="#">Negocios</a></li>
              <li><a href="#">Cine</a></li>
              <li><a href="#">Cultura</a></li>
              <li><a href="#">blogs</a></li>
              </ul>
          </div>
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
