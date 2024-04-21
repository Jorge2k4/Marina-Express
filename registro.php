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
        </div>
        <form method= "post" >
            <div class="logo">
                <img src="imagenes/Logo_Marina_Express-removebg.png" alt="">
            </div>
            <div class="mb-3">
                <center>
                    <h2>Crear nueva cuenta</h2>
                </center>
                <div class="mb-3 mt-3">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="usuario" placeholder="usuario" name="usuario">
                    
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">contraseña:</label>
                    <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="email" name="email">
                </div>
                
                <input type="submit" class="btn" name="registrarse" value="Crear cuenta">
               </form>
               <?PHP
                    include ("registrar.php");
                 ?>
            </body>
</html>