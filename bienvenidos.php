<?php
session_start();
if (!isset($_SESSION['correo'])) {
  header("Location: login.php");
  exit();
}

$conexion = mysqli_connect('localhost', 'root', '', 'dni3');
$correo = $_SESSION['correo'];
$sql = "SELECT nombre, apellido FROM usuarios WHERE correo = '$correo' LIMIT 1";
$resultado = mysqli_query($conexion, $sql);
$usuario = mysqli_fetch_assoc($resultado);

$nombre = $usuario['nombre'];
$apellido = $usuario['apellido'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f6f9fc;
      font-family: 'Segoe UI', sans-serif;
      text-align: center;
      padding-top: 10%;
    }
    .gallo {
      font-size: 4rem;
    }
  </style>
</head>
<body>
  <div class="container w-50 p-4 border border-success rounded bg-white shadow">
    <div class="gallo">🐓</div>
    <h3>¡Bienvenido, <?php echo "$nombre $apellido"; ?>!</h3>
    <p class="mt-3">Estás listo para completar tu instancia digital.</p>
    <a href="index.php" class="btn btn-success mt-3 px-4">Ir al formulario</a><br>
    <a href="logout.php" class="btn btn-outline-danger mt-3">Cerrar sesión</a>
  </div>
</body>
</html>
