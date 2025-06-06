<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - UPEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Bienvenido, <?php echo $_SESSION['admin_nombre']; ?></h2>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Registrar Docentes</h5>
                        <p class="card-text">Gestiona el registro de nuevos docentes.</p>
                        <a href="registro_docentes.html" class="btn btn-primary">Ir a Registrar Docentes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Registrar Asistencia</h5>
                        <p class="card-text">Permite a los docentes registrar su asistencia.</p>
                        <a href="registro_asistencia.html" class="btn btn-success">Ir a Registrar Asistencia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Reportes de Asistencia</h5>
                        <p class="card-text">Genera y exporta informes de asistencia.</p>
                        <a href="reportes.html" class="btn btn-info">Ir a Reportes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="php/logout.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>