<!-- Contacto o furmulario de contacto utilizando PHPMailer 

<?php
// Incluir los archivos de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

include("conexion.php");

if (isset($_POST['contact'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $fecha = date("Y-m-d");

        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, mensaje, fecha) VALUES ('$name', '$email', '$direction', '$phone', '$message', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'bbienlou@gmail.com'; 
                $mail->Password = '---------'; 
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                
                $mail->setFrom('bbienlou@gmail.com', 'Webmaster');
                $mail->addAddress('bbienlou@gmail.com', 'Destinatario'); 
                $mail->Subject = 'Nuevo registro en la base de datos';
                $mail->Body    = "Se ha guardado un nuevo registro:\n\nNombre: $name\nEmail: $email\nDirección: $direction\nTeléfono: $phone\nMensaje: $message\nFecha: $fecha";
                
                $mail->send();
                ?>
                <h3 class="success">Mensaje enviado y datos guardados</h3>
                <?php
            } catch (Exception $e) {
                ?>
                <h3 class="error">No se pudo enviar el correo: <?php echo $mail->ErrorInfo; ?></h3>
                <?php
            }
        } else {
            ?>
            <h3 class="error">Ocurrió un error: <?php echo mysqli_error($conex); ?></h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>
