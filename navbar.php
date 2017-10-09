<header>
  <div class="nav-top">
    <div class="titulo">
      <!-- <h1>LA NACION</h1> -->
      <img class="laNacion" src="images/title.png" alt="La Nacion">
      <div class="fecha-temperatura">
        <p class="fecha">
          <script>
            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
            var fecha = new Date();
            document.write(diasSemana[fecha.getDay()] + " " + fecha.getDate() + " de " + meses[fecha.getMonth()] + " de " + fecha.getFullYear() + " |");
          </script>
        </p>
        <img class="icono-clima" src="" alt="">
        <p class="temperatura"> | 18ºC </p>
      </div>
    </div>
    <div class="btn-ingresar-subscribete">
      <a class="ingresar" href="#">Ingresar</a>
      <a class="subscribete" href="#">Subscribete</a>
      <a class="lupa" href="#"><img src="" alt=""></a>
    </div>
  </div>
  <div class="nav-bottom">
    <a class="hoy" href="#">Hoy</a>
    <a class="actualidad" href="#">Actualidad</a>
    <a class="negocios" href="#">Negocios</a>
    <a class="deportes" href="#">Deportes</a>
    <a class="vida-ocio" href="#">Vida & Ocio</a>
    <a class="ideas" href="#">Ideas</a>
    <a class="espectaculos" href="#">Espectaculos</a>
    <a class="dolar-hoy" href="#">Dolar Hoy</a>
    <a class="servicios" href="#">Servicios</a>
  </div>
</header>
