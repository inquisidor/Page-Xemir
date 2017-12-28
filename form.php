<?php
    header("Content-type: text/html;charset=\"utf-8\"");
    $error = ""; $mensajeExito = "";

    if ($_POST) 
    {

        if ($error != "") 
        {
            $error = '<div class="alert alert-danger" role="alert"><p><b>Se generó un error intente mas tarde:</b></p>' . $error . '</div>';
        } 

        else 
        {
            $nombre = $_POST['nombre'];
            $mail = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensajeC = $_POST['mensaje'];
                        
            $header = 'From: ' . $mail . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";

            $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
            $mensaje .= "Su e-mail es: " . $mail . " \r\n";
            $mensaje .= "Asunto: " . $asunto . " \r\n";
            $mensaje .= "Mensaje: " . $mensajeC . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());

            $para = 'callcentermld@gmail.com';
            $asunto = 'Soluciones Xemir servicio Web';

            if (mail($para, $asunto, utf8_decode($mensaje), $header)) 
            {
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito :)</div>';    
            } 

            else 
            {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar :(</div>';  
            } 
        }  
    }
 ?>

<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/LocalBusiness" lang="es">
    <head>
    <?php include 'head.html' ?>
    <?php include 'includes/menu.php' ?>
    <body background="im/fiesta.png">
        <div class="up-margin">
            <div class="row result">
                <div class="col-sm-6">
                    <div id="l">
                        <div class="card text-center">
                           <h1>Mensaje Enviado !!!. <br> En el transcurso del día recibirá una respuesta!!!. <br>Gracias por contar con nosotros. <br> Equipo de IT</h1> 
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php' ?>
        </div>
    </body>
</html>