<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <div class="form-container">
        <h2>Comunicate con Nosotros</h2>
        <p>Por Favor completa lo siguiente con tus datos y te contactaremos lo antes posible</p>
        <form method="post" autocomplete="off">
        <div class="form-group">
                <div class="form-content">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Nombre">
                </div>

                <div class="form-content">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>

                <div class="form-content">
                    <label for="direction">Dirección</label>
                    <input type="text" id="direction" name="direction" placeholder="Dirección">
                </div>

                <div class="form-content">
                    <label for="phone">Telefono</label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefono">
                </div>
        </div>

        <label for="message">Mensaje</label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Deja un breve mensaje" ></textarea>
        <input class="btn" type="submit" name="contact" value="Enviar ">

    
        </form>
    </div>


<?php 
    include("contacto.php")
?>
</body>
</html>