<?php
// Validación básica en servidor
$nombre   = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
$apellido = isset($_GET['apellido']) ? htmlspecialchars($_GET['apellido']) : '';
$dni      = isset($_GET['dni']) ? htmlspecialchars($_GET['dni']) : '';
$correo   = isset($_GET['correo']) ? htmlspecialchars($_GET['correo']) : '';

// Validación mínima del lado del servidor
$acceso_valido = !empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL) && !empty($apellido);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Instancia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container w-75 border border-success p-4 mt-5">
  <?php if ($acceso_valido): ?>
    <h4 class="mb-3 text-center">Instancia</h4>
    <h5 class="mb-3 text-end"><?php echo "Fecha: " . date("d/m/Y"); ?></h5>    
    <p><strong><?php echo "$nombre $apellido"; ?></strong> con DNI <strong><?php echo $dni; ?></strong> y correo electrónico <strong><?php echo $correo; ?></strong></p>
    <p><strong>Expone:</strong></p>
    <p><strong>Solicita:</strong></p>
  <?php else: ?>
    <div class="alert alert-danger">
      Acceso denegado. Los datos proporcionados no son válidos.
    </div>
  <?php endif; ?>
</div>
</body>
</html>