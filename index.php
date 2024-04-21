<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marina Express</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <form method="post">
            <div class="logo">
                <img src="imagenes/Logo_Marina_Express-removebg.png" alt="">
            </div>
            <div class="mb-3">
                <center>
                    <h2>Iniciar Sesión</h2>
                </center>
                <div class="mb-3 mt-3">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario">
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <a href="registro.php" class="btn btn-primary">Crear nueva cuenta</a>
                <a href="index2.html" class="btn btn-primary">Ingresar como invitado</a>
            </div>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                setTimeout(function () {
                    var loadingOverlay = document.getElementById('loading-overlay');
                    loadingOverlay.style.display = 'none';
                }, 1000); // 1000 ms = 1 segundo
            });
        </script>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
            include("conexion.php");

            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];

            $consulta = "SELECT * FROM registro_datos WHERE usuario='$usuario' AND contraseña='$contraseña'";
            $resultado = mysqli_query($conex, $consulta);

           
            if (mysqli_num_rows($resultado) == 1) {
                
                header("Location: index2.html");
                exit(); 
            } else {
               
                echo "<script>alert('Usuario o contraseña incorrectos. Por favor, inténtalo de nuevo.');</script>";
            }
        }
        ?>
    </main>

    <footer>
        <p>Derechos de autor © 2023 Transporte Marítimo</p>
    </footer>

    <div id="loading-overlay" class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

</body>

</html>
