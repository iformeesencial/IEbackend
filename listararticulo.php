<?php
require_once('menu.php');
 ?>

<title>Listar Articulo</title>
<h1>Listado de los articulos del sistema</h1>

    <div class="content_area">
      <div class="main_content floatleft">
        <div class="rigth_coloum floatleft">

  <div>
    <h2 class="title">Filtros de busqueda</h2>

    <div align="center">
      <div>
        <div class="news-letter">
          <form action="#" method="post">

            <input type="text" placeholder="Numero" id="name" />
            <input type="text" placeholder="Autor" id="name" />
        
        Categoria:    
        <select type="text" name="transporte">
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          <option>Deporte</option>
          </select>
        </br></br>

        Interacciones del usuario:    
        <select type="text" name="transporte">
          <option>Mas "me gusta"</option>
          <option>Mas compartido</option>
          <option>Mas visitado</option>
        </select>
        </br></br>

            <input type="date" placeholder="Fecha" id="email" />

            <input type="submit" value="Buscar" id="form-submit" />
          </form>
        </div>
      </div>

    </div>
    
    <div class="rigth_coloum floatleft">
      <h3>Resultado busqueda:</h3>
        <h3></h3>

        <p>Numero de publicidad: #001</p>
        <p>Autor: Ignacio Gallardo</p>
        <p>Categoria: Deporte </p>
        <p>Interaccion del usuario: 23 MG </p>

      </br>
        <h3></h3>
        <a class="readmore" href="modiarticulo.php">Modificar</a>
        <a class="readmore" href="#">Sancionar</a>
        <a class="readmore" href="#">Borrar</a>
    </br>
    </br>
    </br>
    </div>

    <div class="rigth_coloum floatleft">
      <h3>Resultado busqueda:</h3>
        <h3></h3>

        <p>Numero de publicidad: #001</p>
        <p>Autor: Ignacio Gallardo</p>
        <p>Categoria: Deporte </p>
        <p>Interaccion del usuario: 23 MG </p>

      </br>
        <h3></h3>
        <a class="readmore" href="modiarticulo.php">Modificar</a>
        <a class="readmore" href="#">Sancionar</a>
        <a class="readmore" href="#">Borrar</a>
    </br>
    </br>
    </br>
    </div>

    <div class="rigth_coloum floatleft">
      <h3>Resultado busqueda:</h3>
        <h3></h3>

        <p>Numero de publicidad: #001</p>
        <p>Autor: Ignacio Gallardo</p>
        <p>Categoria: Deporte </p>
        <p>Interaccion del usuario: 23 MG </p>

      </br>
        <h3></h3>
        <a class="readmore" href="modiarticulo.php">Modificar</a>
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