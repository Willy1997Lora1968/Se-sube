<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas</title>
  <link rel="stylesheet" href="styles/articulosPreguntas.css">
</head>
<body>
  <header>
    <img src="/Se sube/images/laboratorioUno.png" alt="Un laboratorio">

    <h1>Médico, especialista en músculo esquelético:</h1>
    <br>
    <h2>Audio sobre la Artrofía Muscular:</h2>
    <br>
    <audio controls>
      <source src="./audios/002.mp3" type="audio/mpeg">
      <source src="./audios/002.ogg" type="audio/ogg">
      Tu navegador no soporta el elemento de audio.
    </audio>
  </header>

  <h3>Articulo Fundamental 2 DE ENERO 2024</h3>

  <article>
    <h3>Medicina Preventiva</h3>
    <p>Este enfoque se centra en prevenir enfermedades antes de que ocurran. En el caso de la atrofia muscular, la
      medicina preventiva podría incluir mantener un estilo de vida activo y una nutrición adecuada para mantener los
      músculos fuertes y saludables. La atrofia muscular a menudo puede ser el resultado de la inactividad física. Por
      lo tanto, mantenerse físicamente activo puede ser una forma efectiva de prevenir la atrofia muscular.</p>

    <h3>Medicina Curativa</h3>
    <p>Este enfoque se centra en tratar enfermedades una vez que han ocurrido. En el caso de la atrofia muscular, el
      tratamiento podría incluir fisioterapia, medicamentos para el dolor y, en algunos casos, cirugía. La
      rehabilitación es crucial después de la intervención médica para recuperar la fuerza y la movilidad en la zona
      afectada.</p>

    <p>Es importante recordar que cada individuo es único, y lo que funciona para uno puede no funcionar para otro. Por
      lo tanto, siempre es importante hablar con un profesional de la salud para desarrollar un plan de manejo que se
      adapte a las necesidades individuales.</p>
  </article>
  

<!-- Aquí es donde irían tus artículos -->
<section>
    <article>
      <h3>La importancia del ejercicio para la salud del sistema musculoesquelético</h3>
      <p>El ejercicio regular es fundamental para mantener la salud del sistema musculoesquelético. Los músculos necesitan ser trabajados regularmente para mantener su fuerza y resistencia. Además, el ejercicio también ayuda a mantener la densidad ósea, lo que puede prevenir enfermedades como la osteoporosis. El ejercicio también puede ayudar a mejorar la flexibilidad y la movilidad de las articulaciones, lo que puede prevenir lesiones.</p>
    </article>

    <article>
      <h3>Entendiendo la artritis reumatoide</h3>
      <p>La artritis reumatoide es una enfermedad autoinmune crónica que afecta principalmente a las articulaciones. Se caracteriza por la inflamación del revestimiento de las articulaciones, lo que puede resultar en daño articular a largo plazo. Los síntomas pueden incluir dolor articular, hinchazón, rigidez y pérdida de función. Aunque no existe una cura para la artritis reumatoide, hay tratamientos disponibles que pueden ayudar a manejar los síntomas y prevenir el daño articular.</p>
    </article>

    <article>
      <h3>Recuperación después de una lesión musculoesquelética</h3>
      <p>La recuperación después de una lesión musculoesquelética puede ser un proceso largo y desafiante. Es importante seguir un plan de rehabilitación adecuado, que puede incluir fisioterapia, ejercicios de fortalecimiento y estiramiento, y, en algunos casos, cirugía. El descanso y la recuperación también son fundamentales para permitir que el cuerpo se cure. Con el tratamiento y el cuidado adecuados, la mayoría de las personas pueden recuperarse de una lesión musculoesquelética y volver a su nivel de actividad normal.</p>
    </article>
  </section>


  <section>
    <h2>¿Si tienes alguna pregunta, no dudes en hacerla.?</h2>
    <form id="formularioPregunta" method="post" action="respuestas.php">
      <label for="nombre">Nombre:</label><br>
      <input type="text" id="nombre" name="nombre" required><br>
      <label for="correo">Correo electrónico:</label><br>
      <input type="email" id="correo" name="correo" required><br>
      <label for="sugerencia">¿Qué te gustaría escuchar sobre traumatología?</label><br>
      <textarea id="sugerencia" name="sugerencia" rows="4" cols="50" required></textarea><br>
      <input type="submit" value="Enviar">
    </form>
  </section>

  <nav>
    <a href="index.html"><i>Inicio</i></a>
    <a href="imagenes.html"><i>Imágenes</i></a>
    <a href="articulosPreguntas.php"><i>ArtículosPreguntas</i></a>
    <a href="historialDeArticulos.php"><i>HistorialArtículos</i></a>
    <a href="historialDePreguntas.php"><i>HistorialPreguntas</i></a>
    <a href="respuestas.php"><i>Respuestas</i></a>
    <a href="historialDeRespuestas.php"><i>HistorialRespuestas</i></a>
    <a href="aportes.html"><i>Aportes</i></a>
  </nav>  

  </main>
  <footer>
    HM & LEI &copy; Todos los derechos reservados 2023
  </footer>
  
  <script>
    document.getElementById('formularioPregunta').addEventListener('submit', function (event) {
      var nombre = document.getElementById('nombre').value;
      var correo = document.getElementById('correo').value;
      var sugerencia = document.getElementById('sugerencia').value;

      if (!nombre || !correo || !sugerencia) {
        alert('Por favor, completa todos los campos.');
        event.preventDefault();
      }
    });
  </script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>