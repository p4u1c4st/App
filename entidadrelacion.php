<?php
$mensaje1 = "";
$mensaje2 = "";
$mensaje3 = "";
$mensaje4 = "";


if (isset($_POST['guardar_Escuela'])) {
    $Escuela = $_POST['escuela'] ?? '';
    $Edificio = $_POST['edificio'] ?? '';
    $Nombre = $_POST['nombre'] ?? '';
    $Rol = $_POST['rol'] ?? '';

    if ($Escuela && $Edificio && $Nombre && $Rol) {
        $linea = "Escuela: $Escuela, Edificio: $Edificio, Nombre: $Nombre, Rol: $Rol" . PHP_EOL;
        file_put_contents('registros_escuela.txt', $linea, FILE_APPEND);
        $mensaje1 = "Registro de Escuela guardado correctamente.";
    } else {
        $mensaje1 = "Completa todos los campos del formulario de Escuela.";
    }
}


if (isset($_POST['guardar_edificio'])) {
    $Edificio2 = $_POST['edificio'] ?? '';
    $Direccion = $_POST['direccion'] ?? '';
    $Salon = $_POST['salon'] ?? '';

    if ($Edificio2 && $Direccion && $Salon) {
        $linea = "Edificio: $Edificio2, Dirección: $Direccion, Salón: $Salon" . PHP_EOL;
        file_put_contents('registros_edificio.txt', $linea, FILE_APPEND);
        $mensaje2 = "Registro de edificio guardado correctamente.";
    } else {
        $mensaje2 = "Completa todos los campos del formulario de edificios.";
    }
}


if (isset($_POST['guardar_alumno'])) {
    $Nombre = $_POST['nombre'] ?? '';
    $Apellido = $_POST['apellido'] ?? '';
    $Matricula = $_POST['matricula'] ?? '';

    if ($Nombre && $Apellido && $Matricula) {
        $linea = "Nombre: $Nombre, Apellido: $Apellido, Matrícula: $Matricula" . PHP_EOL;
        file_put_contents('registros_Alumno.txt', $linea, FILE_APPEND);
        $mensaje3 = "Registro de alumno guardado correctamente.";
    } else {
        $mensaje3 = "Completa todos los campos del formulario de alumno.";
    }
}


if (isset($_POST['guardar_maestro'])) {
    $Nombre = $_POST['nombre'] ?? '';
    $Apellido = $_POST['apellido'] ?? '';
    $Curso = $_POST['matricula'] ?? '';

    if ($Nombre && $Apellido && $Curso) {
        $linea = "Nombre: $Nombre, Apellido: $Apellido, Curso: $Curso" . PHP_EOL;
        file_put_contents('registros_maestro.txt', $linea, FILE_APPEND);
        $mensaje4 = "Registro de maestro guardado correctamente.";
    } else {
        $mensaje4 = "Completa todos los campos del formulario de maestro.";
    }
}


$registros_Escuela = file_exists('registros_escuela.txt') ? file('registros_escuela.txt', FILE_IGNORE_NEW_LINES) : [];
$registros_edificio = file_exists('registros_edificio.txt') ? file('registros_edificio.txt', FILE_IGNORE_NEW_LINES) : [];
$registros_alumno = file_exists('registros_Alumno.txt') ? file('registros_Alumno.txt', FILE_IGNORE_NEW_LINES) : [];
$registros_maestro = file_exists('registros_maestro.txt') ? file('registros_maestro.txt', FILE_IGNORE_NEW_LINES) : [];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <style type="text/css">
        body{background-color:aqua ;}
    </style>
    <meta charset="UTF-8">
    <title>Registro Escolar Completo</title>
</head>
<body>
    <h2>Formulario 1: Registro de Escuela</h2>
    <?php if($mensaje1 != "") echo "<p><strong>$mensaje1</strong></p>"; ?>
    <form method="post">
        <label>Nombre de la Escuela: </label>
        <input type="text" name="escuela"><br><br>

        <label>Nombre del Edificio: </label>
        <input type="text" name="edificio"><br><br>

        <label>Nombre de la Persona: </label>
        <input type="text" name="nombre"><br><br>

        <label>Rol: </label>
        <select name="rol">
            <option value="">--Selecciona--</option>
            <option value="Alumno">Alumno</option>
            <option value="Maestro">Maestro</option>
        </select><br><br>

        <button type="submit" name="guardar_persona">Guardar Escuela</button>
    </form>

    <h3>Registros de Escuela:</h3>
    <ul>
        <?php foreach ($registros_Escuela as $r) echo "<li>".htmlspecialchars($r)."</li>"; ?>
    </ul>

    <hr>

    <h2>Formulario 2: Registro de Edificios</h2>
    <?php if($mensaje2 != "") echo "<p><strong>$mensaje2</strong></p>"; ?>
    <form method="post">
        <label>Nombre del Edificio: </label>
        <input type="text" name="edificio"><br><br>

        <label>Dirección: </label>
        <input type="text" name="direccion"><br><br>

        <label>Salón: </label>
        <input type="text" name="salon"><br><br>

        <button type="submit" name="guardar_edificio">Guardar Edificio</button>
    </form>

    <h3>Registros de Edificios:</h3>
    <ul>
        <?php foreach ($registros_edificio as $r) echo "<li>".htmlspecialchars($r)."</li>"; ?>
    </ul>

    <hr>

    <h2>Formulario 3: Registro de Alumnos</h2>
    <?php if($mensaje3 != "") echo "<p><strong>$mensaje3</strong></p>"; ?>
    <form method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br><br>

        <label>Apellido: </label>
        <input type="text" name="apellido"><br><br>

        <label>Matrícula: </label>
        <input type="text" name="matricula"><br><br>

        <button type="submit" name="guardar_alumno">Guardar Alumno</button>
    </form>

    <h3>Registros de Alumnos:</h3>
    <ul>
        <?php foreach ($registros_alumno as $r) echo "<li>".htmlspecialchars($r)."</li>"; ?>
    </ul>

    <hr>

    <h2>Formulario 4: Registro de Maestros</h2>
    <?php if($mensaje4 != "") echo "<p><strong>$mensaje4</strong></p>"; ?>
    <form method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br><br>

        <label>Apellido: </label>
        <input type="text" name="apellido"><br><br>

        <label>Curso: </label>
        <input type="text" name="matricula"><br><br>

        <button type="submit" name="guardar_maestro">Guardar Maestro</button>
    </form>

    <h3>Registros de Maestros:</h3>
    <ul>
        <?php foreach ($registros_maestro as $r) echo "<li>".htmlspecialchars($r)."</li>"; ?>
    </ul>
</body>
</html>
