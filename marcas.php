<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.3. Creación de elementos HTML de forma dinámica</title>
    <link rel="stylesheet" href="archivo.css">
</head>

<body>

    <?php
    echo "";
    ?>
    <div>
        <!-- Menu -->
        <div>
            <ul>
                <li><a href="index.php" class="hidden-md-up">
                        <ul class="contact-options">
                            <li><img src="casa-icono-silueta.png" width="20" height="20" alt="Inicio"></li>
                        </ul>
                    </a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="presupuestos.php">Presupuestos</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="valoracion.php">Valoración</a></li>
                <li><a href="marcas.php">Marcas</a></li>
                <li><a href="consejos.php">Consejos Financieros</a></li>
                <li><a href="videos.php">Vídeos</a></li>

            </ul>
        </div>

        <!-- Marcas -->

        <div id="contenidox">
            <img id="app" src="maxi.jpg" width="20" height="20" alt="Financiaap">
            <p>Maximixe Consult S.A.</p>
            <br><br><br>
            <img id="app" src="aseso.png" width="20" height="20" alt="Financiaap">
            <p>Stock Asesores</p>
            <br><br><br>
            <img id="app" src="stock.png" width="30" height="40" alt="Financiaap">
            <p>Money landia</p>
            <br><br><br>
        </div>
    </div>

    <!-- Funcionalidad -->
    <script src="extension.js"></script>
    <!-- FontaWesome -->
    <script src="https://kit.fontawesome.com/414c860b05.js" crossorigin="anonymous"></script>
</body>

</html>