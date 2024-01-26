18:05:17  [main] 	Initializing Control Panel
18:05:17  [main] 	Windows Version:  Home  64-bit
18:05:17  [main] 	XAMPP Version: 8.1.25
18:05:17  [main] 	Control Panel Version: 3.3.0  [ Compiled: Apr 6th 2021 ]
18:05:17  [main] 	Running with Administrator rights - good!
18:05:17  [main] 	XAMPP Installation Directory: "c:\users\cabal\desktop\program files\xampp\"
18:05:17  [main] 	WARNING: Your install directory contains spaces.  This may break programs/scripts
18:05:17  [main] 	Checking for prerequisites
18:05:17  [main] 	All prerequisites found
18:05:17  [main] 	Initializing Modules
18:05:17  [main] 	Starting Check-Timer
18:05:17  [main] 	Control Panel Ready
18:05:23  [Apache] 	Attempting to start Apache service...
18:05:25  [Apache] 	Status change detected: running
18:05:30  [mysql] 	Attempting to start MySQL service...
18:05:31  [mysql] 	Status change detected: running
18:29:49  [mysql] 	Attempting to stop MySQL service...
18:29:51  [mysql] 	Status change detected: stopped
18:29:52  [Apache] 	Attempting to stop Apache service...
18:29:54  [Apache] 	Status change detected: stopped
23:29:57  [Apache] 	Attempting to start Apache service...
23:29:58  [Apache] 	Status change detected: running
23:29:59  [mysql] 	Attempting to start MySQL service...
23:30:00  [mysql] 	Status change detected: running
23:33:13  [Apache] 	Attempting to stop Apache service...
23:33:14  [mysql] 	Attempting to stop MySQL service...
23:33:15  [Apache] 	Status change detected: stopped
23:33:16  [mysql] 	Status change detected: stopped
14:04:36  [main] 	Executing "c:\users\cabal\desktop\program files\xampp\"-------> en este archivo te comvendria generar tu propio path porque 
Program Files conytiene espacio y eso puede hacer que no se ejecute como debe no lo pongas en el archivo raiz tampoco porque esta utilizado, ve el video
los archivos se encuentran en la ruta expresada anteriormente pero dentro de la carpeta htdcs
estos serian los pasos aseguir:

Para relacionar tu código con XAMPP, que incluye Apache y MySQL, puedes seguir estos pasos:

1. **Instala y configura XAMPP**: Si aún no lo has hecho, descarga e instala XAMPP desde su sitio web oficial. Durante la instalación, asegúrate
de marcar las casillas para instalar Apache y MySQL.

2. [mirar video de imstalacion](https://www.youtube.com/watch?v=6c4PErvPzgg)

3. **Inicia los servicios de Apache y MySQL**: Abre el panel de control de XAMPP y haz clic en los botones "Start" para Apache y MySQL.

4. **Crea tu base de datos en MySQL**: Abre phpMyAdmin en tu navegador (generalmente se encuentra en `http://localhost/phpmyadmin`)

5. y crea una nueva base de datos para tu proyecto. También puedes crear la tabla `Preguntas` en esta base de datos.

6. **Coloca tu código en el directorio correcto**: Los archivos de tu sitio web deben colocarse en el directorio `htdocs` de XAMPP,
que generalmente se encuentra en `C:\xampp\htdocs` en Windows. Puedes crear una nueva carpeta en `htdocs` para tu proyecto
y colocar tus archivos HTML y PHP allí. (acordare que si lo pones en una ruta ProgramFiles va asi sin espacios)

7. **Actualiza tu archivo PHP**: En tu archivo PHP, actualiza las variables `$servername`, `$username`, `$password` y `$dbname` con tus propios detalles
de la base de datos. `$servername` generalmente será `"localhost"`, `$username` y `$password` serán los que hayas configurado para MySQL durante la
instalación de XAMPP (por defecto, el nombre de usuario es `"root"` y la contraseña está vacía), y `$dbname` será el nombre de la base de datos que
hayas creado en el paso 3.

8. **Abre tu sitio web en un navegador**: Ahora puedes abrir tu sitio web en un navegador yendo a `http://localhost/nombre_de_tu_carpeta`.

Por favor, ten en cuenta que este es un ejemplo muy básico y no incluye validación de datos ni protección contra ataques de inyección SQL. 
Además, tendrías que reemplazar `"username"` y `"password"` con tu nombre de usuario y contraseña de MySQL, y `"myDB"` con el nombre de tu base de datos. 
