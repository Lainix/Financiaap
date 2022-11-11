<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.3. Creación de elementos HTML de forma dinámica</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="estilos.css">
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
                <li><a href="index.html" class="hidden-md-up">
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
        <section class="section">
            <div class="hero-body">
                <div class="container">
                    <h2 class="title is-2">Galeria de videos mejora tus finanzas</h2>
                    <p class="subtitle is-5">Subtitle 5</p>
                    <div class="columns">                
                        <div class="column">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/kou2pjt6w90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="column">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/6kMFlAgzgvg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    <div class="columns pt-6">
                        <div class="column">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/1G3S0mGM7PU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="column">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gJaRJVgrWzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Funcionalidad -->
    <script src="extension.js"></script>
    <!-- FontaWesome -->
    <script src="https://kit.fontawesome.com/414c860b05.js" crossorigin="anonymous"></script>
</body>

</html>