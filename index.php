<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>Bancolombia</title>
		<link rel="stylesheet" href="css/estilos.css">

		<style>
		    .container {
		      display: flex;
		      justify-content: space-between;
		    }

		    .div1, .div2 {
		      flex: 1;
		    }

		    .div1 {
		      text-align: left;
		    }

		    .div2 {
		      text-align: right;
		    }
		</style>



		<script>
	    window.addEventListener("load", function() {
	      var loading = document.getElementById("loading");
	      var video = document.getElementById("loading-video");

	      setTimeout(function() {
	        loading.style.display = "none";
	      }, 6000); // 6000 milisegundos = 6 segundos

	      video.addEventListener("canplaythrough", function() {
	        video.play();
	      });
	    });
	  </script>



	  <script>
    window.addEventListener('DOMContentLoaded', (event) => {
      // Obtener el elemento por su id
      var valorElement = document.getElementById('valor');

      // Valor inicial
      var valorOriginal = 7905125100.31;

      // Obtener el valor original formateado con el símbolo de dólar y los separadores de miles y decimales adecuados
      var valorFormateado = '$ ' + valorOriginal.toLocaleString('es', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

      // Actualizar el contenido del elemento con el valor inicial
      valorElement.innerHTML = valorFormateado;

      // Función para generar un tiempo aleatorio entre min y max
      function generarTiempoAleatorio(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
      }

      // Función para generar un incremento aleatorio entre 165.000 y 1.650.000
      function generarIncrementoAleatorio() {
        var incrementoAleatorio = Math.random() >= 0.5 ? 65999 : 659900;
        return incrementoAleatorio;
      }

      // Actualizar el valor con un tiempo aleatorio entre 3 y 10 segundos y un incremento aleatorio
      function actualizarValor() {
        // Generar el incremento aleatorio
        var incremento = generarIncrementoAleatorio();

        // Calcular el nuevo valor
        valorOriginal += incremento;

        // Formatear el nuevo valor con el símbolo de dólar y los separadores de miles y decimales adecuados
        var nuevoValorFormateado = '$ ' + valorOriginal.toLocaleString('es', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

        // Actualizar el contenido del elemento
        valorElement.innerHTML = nuevoValorFormateado;

        // Generar el próximo tiempo de actualización aleatorio entre 3 y 10 segundos
        var tiempoSiguiente = generarTiempoAleatorio(5000, 15000);

        // Esperar el tiempo aleatorio antes de la siguiente actualización
        setTimeout(actualizarValor, tiempoSiguiente);
      }

      // Iniciar la primera actualización
      actualizarValor();
    });
  </script>


	</head>

	<div id="loading">
	    <video id="loading-video" src="img/loading.webm" loop muted></video>
	 </div>




	<body>
		<br>
		<div class="rdm-toolbar--fila">
			<div class="rdm-toolbar--izquierda">
			</div>
			<div class="rdm-toolbar--centro">
				<a href="index.php">
					<img src="img/logo.png" style="width: 2.5em;">
				</a>
			</div>
			<div class="rdm-toolbar--derecha">
			</div>
		</div>
		<main class="rdm--contenedor-toolbar" style="margin-top: 0.5em; font-size: 0.95em">


			<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.975em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">TRANSACCIONES</h1>
			<h1 class="rdm-tarjeta--titulo-largo"><div align="left" style="color: #2c2A29; font-weight: 600; font-size: 1.2em; margin-top: 0.175em; letter-spacing: -.47px;">Saldos y movimientos</div></h1>
			<span class="icon-bco icon-cash-payment"></span>
			<br>
			<center>
			<div style="margin: 0em auto">
				<img src="img/vistas.jpg" style="width: 9em;">
			</div>
			</center>
			<section class="rdm-tarjeta" style="margin-bottom: 0em; z-index: 1; position: relative;">
				<div class="rdm-tarjeta--cuerpo">
					<div class="rdm-lista--izquierda-sencillo" style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--contenedor">
							<img src="img/cuentas.jpg" style="width: 2.7em;">
						</div>
						<div class="rdm-lista--contenedor">
							<h2 class="rdm-lista--titulo">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.2em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: 0em; margin-bottom: 0.5em">Cuentas </h1>
							</h2>
						</div>
					</div>
				</div>
			</section>



			<section class="rdm-tarjeta">
				<div class="rdm-tarjeta--cuerpo">
					<div style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--izquierda-porcentaje">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.4em; letter-spacing: -.47px; margin: -0.25em auto">Cuenta de Ahorro</h1>
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; margin-bottom: -2em">Ahorros</h1>
						</div>

						<div class="container">
						    <div class="div1"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.25em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: -0.2em; margin-bottom: 0.5em">693-654723-78</h1></div>
						    <div class="div2"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Saldo Disponible</h1></div>
						  </div>
					</div>

					<div align="right">
						<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.6em; letter-spacing: -.47px; margin-top: -0.7em"><span id="valor">$ 1.125.100,31</span></h1>
					</div>
					<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-size: 0.8em; margin-top: 0.3em; letter-spacing: -.47px; text-decoration: underline;">Ver detalle y movimientos</h1>
					</div>
				</section>








				<section class="rdm-tarjeta">
				<div class="rdm-tarjeta--cuerpo">
					<div style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--izquierda-porcentaje">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.4em; letter-spacing: -.47px; margin: -0.25em auto">Cuenta Corriente</h1>
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; margin-bottom: -2em">Corriente</h1>
						</div>

						<div class="container">
						    <div class="div1"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.25em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: -0.2em; margin-bottom: 0.5em">019-589655-63</h1></div>
						    <div class="div2"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Saldo Disponible</h1></div>
						  </div>
					</div>

					<div align="right">
						<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.6em; letter-spacing: -.47px; margin-top: -0.7em">$ 398.721.302,15</h1>
					</div>
					<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-size: 0.8em; margin-top: 0.3em; letter-spacing: -.47px; text-decoration: underline;">Ver detalle y movimientos</h1>
					</div>
				</section>








				<section class="rdm-tarjeta">
				<div class="rdm-tarjeta--cuerpo">
					<div style="margin-top: 0.8em; margin-bottom: 0.5em;">
						<div class="rdm-lista--izquierda-porcentaje">
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.4em; letter-spacing: -.47px; margin: -0.25em auto">Cuenta de Ahorro</h1>
							<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em; margin-bottom: -2em">Ahorros</h1>
						</div>

						<div class="container">
						    <div class="div1"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.25em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.47px; margin-top: -0.2em; margin-bottom: 0.5em">005-835122-01</h1></div>
						    <div class="div2"><h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 1.1em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">Saldo Disponible</h1></div>
						  </div>
					</div>

					<div align="right">
						<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: bold; font-size: 1.6em; letter-spacing: -.47px; margin-top: -0.7em">$ 158.212.074,03</h1>
					</div>
					<h1 class="rdm-tarjeta--titulo-largo"><div align="center" style="color: #2c2A29; font-size: 0.8em; margin-top: 0.3em; letter-spacing: -.47px; text-decoration: underline;">Ver detalle y movimientos</h1>
					</div>
				</section>






				<br>

				<h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.975em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px; margin-top: 0em">TRANSFERIR DINERO</h1>
				<br>
				<section class="rdm-lista-sencillo">
					<a href="no_inscritos_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-money-box zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>No inscritos Bancolombia / Nequi</b></h2>
								</div>
							</div>
						</article>
					</a>
					<a href="inscritos_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-mail-send zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Propios e inscritos Bancolombia</b></h2>
								</div>
							</div>
						</article>
					</a>
					<a href="qr_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="qr_negro_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-camera-add zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Código QR Negro</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="otros_f.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-balance zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Inscritos de otros bancos</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="error_limite_transferencias.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-trending-up zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Limite de transferencias</b></h2>
								</div>
							</div>
						</article>
					</a>

					<a href="error_conexion.php">
						<article class="rdm-lista--item-sencillo">
							<div class="rdm-lista--izquierda-sencillo">
								<div class="rdm-lista--contenedor">
									<div class="rdm-lista--icono"><i class="zmdi zmdi-network-alert zmdi-hc-2x"></i></div>
								</div>
								<div class="rdm-lista--contenedor">
									<h2 class="rdm-lista--titulo"><b>Error de conexión</b></h2>
								</div>
							</div>
						</article>
					</a>
				</section>
			</main>

			<br>
     <br>
     <br>
     <br>
     <br>
     <br>


					<div class="contenedor">
    <div class="columna"><a href="index.php"><img src="img/inicio.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Inicio</h1></a></div>




    <div class="columna" style="background-color: #FDDA24;"><a href="index.php"><img src="img/transaccionesa.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;"> Transacciones</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/explorar.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Explorar</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/tramites.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Trámites y solicitudes</h1></a></div>

    <div class="columna"><a href="index.php"><img src="img/ajustes.jpg" style="height: 1.3em;"> <h1 class="rdm-tarjeta--titulo-largo" style="color: #2c2A29; font-weight: 500; font-size: 0.8em; font-family: 'OpenSans-Regular', Arial, sans-serif; letter-spacing: -.3px;">Ajustes</h1></a></div>
  </div>
			</html>