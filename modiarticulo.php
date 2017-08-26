<?php
require_once('menu.php');
 ?>

<title>Modi noticia A</title>

<font color="red">
<h1>MODIFICAR -Noticias A-</h1>
</font>

<h1>Noticias A</h1>

<font color="red">
  <h4>Editar titulo: </h4>
</font>

<input type="text" maxlength="25" value="Noticia A" id="form-submit" />

<!-- Aca empieza las noticias mas destacadas del deporte -->
  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="rigth_coloum floatleft">
  <!-- esto es para el centrado de las columnas -->

  <div>
    <h2 class="title">Subtitulos Noticia A</h2>

    <font color="red">
      <h4>Editar subtitulo: </h4>
    </font>

    <input type="text" maxlength="25" value="Subtitulos Noticia A" id="form-submit" />

    <!-- una noticia -->
    <div class="rigth_coloum floatleft">
      <h3>Nombre de noticia -Categoria-</h3>

<!-- muestra imagen -->
      <div>
       <div>
         <img src="images/balon.jpg" alt="" title="Surfear es lo mas caca"/>
       </div>

<!-- formulario de cambio de imagen -->
       <div>
         <div class="news-letter">
       <form enctype="multipart/form-data" action="" method="POST">
         <input name="uploadedfile" type="file"/>
         <input type="submit" value="Cargar foto" />
       </form>

       </div>
       </div>

     </div>

    </br>
      <p>
        <!-- para editar el resumen -->
        <h3>Resumen general articulo:</h3>
        <textarea rows=10 cols=50 placeholder="Resumen" ></textarea>

        <!-- para editar la descripcion -->
        <h3>Descripcion articulo:</h3>
        <textarea rows=30 cols=100 placeholder="Descripcion" ></textarea>

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

        <div>
          <div class="news-letter">
            <form action="#" method="post">
              <input type="submit" value="Terminar modificado" id="form-submit" />
            </form>
          </div>
        </div>

      </p>

    </br>
    </br>
    </br>
    </div>
    <!-- fin de una noticia -->

  </div>

  <!-- Aca empiezan los comentarios -->
            <div>
              <h2 class="title">Comentarios</h2>

              <div class="single_sidebar">
                <h3>Nombre de usuario</h3>
                <textarea name="comentarios" rows="5" cols="50">Buenas noticias las recomiendo mucho</textarea>
                <a class="readmore" href="#">Modificar</a>
                <a class="readmore" href="#">Borrar</a>
              </div>

              <div class="single_sidebar">
                <h3>Nombre de usuario</h3>
                <textarea name="comentarios" rows="5" cols="50">Buenas noticias las recomiendo mucho</textarea>
                <a class="readmore" href="#">Modificar</a>
                <a class="readmore" href="#">Borrar</a>
              </div>

              <div class="single_sidebar">
                <h3>Nombre de usuario</h3>
                <textarea name="comentarios" rows="5" cols="50">Buenas noticias las recomiendo mucho</textarea>
                <a class="readmore" href="#">Modificar</a>
                <a class="readmore" href="#">Borrar</a>
              </div>

              <div class="single_sidebar">
                <h3>Nombre de usuario</h3>
                <textarea name="comentarios" rows="5" cols="50">Buenas noticias las recomiendo mucho</textarea>
                <a class="readmore" href="#">Modificar</a>
                <a class="readmore" href="#">Borrar</a>
              </div>

              <div class="single_sidebar">
                <h3>Nombre de usuario</h3>
                <textarea name="comentarios" rows="5" cols="50">Buenas noticias las recomiendo mucho</textarea>
                <a class="readmore" href="#">Modificar</a>
                <a class="readmore" href="#">Borrar</a>
              </div>

              <div class="single_sidebar">
                <h3>Nombre de usuario</h3>
                <textarea name="comentarios" rows="5" cols="50">Buenas noticias las recomiendo mucho</textarea>
                <a class="readmore" href="#">Modificar</a>
                <a class="readmore" href="#">Borrar</a>
              </div>
            </div>
  <!-- Aca terminan -->

          
        </div>
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
