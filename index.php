<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo PHP HTML</title>
</head>
<body>

<?php
// Texto centrado
echo '<h1 style="text-align:center;">Como Configurar un Servidor Local <br> en Xampp</h1>';

// Imagen centrada
echo '<img src="xamp.jpg" style="display:block; margin:auto;" width="300" alt="Ejemplo de imagen">';

// Párrafo centrado
echo '<p style="text-align:center;">Para configurar un servidor local en xampp primero hay que descargar el instalador de xampp desde su sitio web para poder descargar la aplicacion
para luego intalarlo.</p>';

echo '<img src="xamppsitio.jpg" style="display:block; margin:auto;" width="550" alt="Ejemplo de imagen">';

echo '<p style="text-align:center;">Despus de haber instalado xampp en el equipo debes dirigirte a panel de control e darle click a desinstalar un programa, una vez hecho eso debes darle click a activar o desactivar las caracteristicas de windows luego despliega internet information services y activa servidor ftp.</p>';
echo '<img src="iis.jpg" style="display:block; margin:auto;" width="550" alt="Ejemplo de imagen">';

echo '<p style="text-align:center;">Entra a xampp y revisa si te deja activa apache y mysql si no te dejan ve a config y cambia sus puertos con eso ya podran activarse.</p>';
echo '<img src="xamppapp.jpg" style="display:block; margin:auto;" width="550" alt="Ejemplo de imagen">';

echo '<p style="text-align:center;">En visual studio code crea un programa php el cual aguardaras en una carpeta en htdocs, para encontrar esa carpeta tienes que dirigirte a disco local c luego entra a la carpeta de xampp, una vez dentro de la carpeta xampp busca la carpeta htdocs dentro de esa carpeta crearas otra carpeta donde pondras todos tus programas de php.</p>';
echo '<img src="htdocs.jpg" style="display:block; margin:auto;" width="550" alt="Ejemplo de imagen">';

echo '<p style="text-align:center;">Un vez guardados tus programas php alli dirigete a editar las variables de entorno del sistema se habrira una pestaña con el titulo de propiedades del sistema dende tendras que darle clikc a variables de entorno luego le daras doble clik a path y le daras click a nuevo para agregar una nueva direccion que dirija a la carpeta de php que esta en la carpeta xampp. </p>';
echo '<img src="variable.jpg" style="display:block; margin:auto;" width="550" alt="Ejemplo de imagen">';

echo '<p style="text-align:center;">Donde se creo la carpeta para guardar los programas agrega un porgrama php con el nombre de index una vez hecho eso iras a tu navegador de confiansa y coloca en el buscador localhost y coloca una diagonal pon el nombre de la carpeta donde aguardas los programas y coloca otra diagonal y coloca el nombre del programa index.php, y teclea enter para buscar y lo llevara a su programa asi podra ejecutar su programa php.</p>';
echo '<img src="ejecucion.jpg" style="display:block; margin:auto;" width="550" alt="Ejemplo de imagen">';

?>
</body>
</html>
