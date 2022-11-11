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

        <!-- Inicio -->

        <div id="contenidox">
            <img id="app" src="Financiapp1.png" width="20" height="20" alt="Financiaap">
            <p>Financiapp es un proyecto creado por tres jóvenes mexicanos originarios de Guadalajara, Jalisco. Han creado una iniciativa de una aplicación en pro de la economía familiar mexicana.
                <br>
                Nos caracterizamos por una mentalidad ágil, pasión y la búsqueda consistirá en desarrollar un sistema que funcione como una herramienta gestora de gastos personales.
                <br>
                Nuestras oficinas están ubicadas
                en Calle Mezquitán No. 302, Colonia Centro Barranquitas en Guadalajara, Jalisco.
            </p>
            <br><br><br>
        </div>


        <div class="row">
            <div class="column desborde" style="background-color:#90e0ef;">
                <div>
                    <h3 class="titulo">Misión</h3>
                    <p>Comprometidos con las finanzas de las familias mexicanas desarrolladondo la mejor solución en software para el mercado Mexicano.</p>
                </div>
            </div>
            <div class="column desborde" style="background-color:#caf0f8;">
                <div>
                    <h3 class="titulo">Visión</h3>
                    <p>Convertirnos en la mejor app de consultoría de Finanzas en México y posteriormente de latinoamérica.
                    </p>
                </div>
            </div>
            <div class="column desborde" style="background-color:#90e0ef;">
                <div>
                    <h3 class="titulo">Políticas de seguridad:</h3>
                    <p>1. Se debe asegurar a cómo de lugar la privacidad de la información de clientes y usuarios.</p>
                    <p>2. Se deben implementar siempre las mejores prácticas en seguridad.</p>
                    <p>3. Se debe capacitar adecuadamente a los empleados en temas de seguridad.</p>
                    <p>4. Se deben generar los planes de recuperación de datos.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Funcionalidad -->
    <script src="extension.js"></script>
    <!-- FontaWesome -->
    <script src="https://kit.fontawesome.com/414c860b05.js" crossorigin="anonymous"></script>
</body>

</html>