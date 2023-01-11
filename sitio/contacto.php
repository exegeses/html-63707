<?php
    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    //configuramos email a enviar
    $destinatario = 'ACÁ poné tu email';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="width: 450px; 
                           margin: auto;
                           padding: 50px;
                           border-radius: 12px;
                           font-family: Tahoma;
                           background-color: #3c3c3c;
                           color: #fff">';
    $cuerpo .= 'Nombre: <b>'.$nombre.'</b><br>';
    $cuerpo .= 'Email: <b>'.$email.'</b><br>';
    $cuerpo .= 'Consulta: <b>'.$consulta.'</b>';
    $cuerpo .= '</div>';
    //encabezados adicionales
    $headers = 'From: info@summerexploring.com' . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    //enviamos el email
    mail( $destinatario, $asunto, $cuerpo, $headers );

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <!-- Logo + empresa -->
        <a href="index.html">
            <img src="imgs/sunsea.png" alt="logo">
            Summer Exploring
        </a>
        <!-- navegación -->
        <nav>
            <a href="#">Promociones</a>
            <a href="#">Destinos</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
    </header>
    <main>
        <section id="hero-banner">
            <h1>
                Summer Exploring<br>
                el lugar para tus vacaciones
            </h1>
        </section>
        <section id="contacto">
            <span>
                Gracias <?= $nombre ?> por contactarnos.
            </span>
        </section>
    </main>

    <footer>
        <!-- logo + empresa -->
        <a href="index.html">
            <img src="imgs/sunsea-wht.png" alt="logo Summer Exploring">
            Summer Exploring
        </a>

        <!-- redes sociales -->
        <div>
            <a href=""><img src="imgs/instagram-w 1.png" alt="Instagram"></a>
            <a href=""><img src="imgs/facebook-w 1.png" alt="Facebook"></a>
            <a href=""><img src="imgs/twitter-w 1.png" alt="Twitter"></a>
        </div>
    </footer>


</body>
</html>