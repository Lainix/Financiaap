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
                    <h2 class="title is-2">12 tips para tener finanzas</h2>
                    <p class="subtitle is-5">El objetivo de estos tips es que uses responsablemente los productos y servicios financieros, lo que te ayudará a tener unas finanzas sanas, necesarias para el desarrollo de tu patrimonio.</p>

                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">1 Haz un presupuesto mensual</p>
                                </div>
                            </div>
                            <div class="content">
                                Al hacer una lista de tus ingresos y egresos podrás identificar los gastos que no son necesarios, esto te permitirá saber tu capacidad de ahorro para lograr tus objetivos y hasta donde puedes gastar.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">2 Ahorra</p>
                                </div>
                            </div>
                            <div class="content">
                                Procura que sea una cantidad fija y no sólo lo que te sobre en la semana, un buen ahorro es la base para lograr una inversión que te permitirá multiplicar tu dinero a futuro.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">3 Paga tus deudas</p>
                                </div>
                            </div>
                            <div class="content">
                                Empieza por aquellas que son más grandes o que te generen un mayor interés, esto permitirá que no sigan creciendo.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">4 Define tu capacidad de endeudamiento</p>
                                </div>
                            </div>
                            <div class="content">
                                Esto con el fin de no hacer gastos que en un futuro te generen problemas y que no puedas pagar.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">5 No des tarjetazo</p>
                                </div>
                            </div>
                            <div class="content">
                                La tarjeta de crédito es una excelente herramienta siempre y cuando la utilices correctamente, no te dejes seducir por los meses sin intereses, procura que los artículos que compres con la tarjeta sean bienes cuya vida útil sea duradera
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">6 Procura ser totalero</p>
                                </div>
                            </div>
                            <div class="content">
                                Así evitarás pagar intereses, recargos y gastos de cobranza, o en su defecto también puedes optar por pagar más del mínimo requerido.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">7 Usa el crédito de manera responsable</p>
                                </div>
                            </div>
                            <div class="content">
                                Hazlo tu mejor aliado, recuerda que el crédito no es un dinero extra, es una cantidad que te presta el banco por la cual estás obligado a pagarla, de lo contrario te generará muchos intereses y un mal historial crediticio.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">8 Evita comprar por impulso</p>
                                </div>
                            </div>
                            <div class="content">
                                Una buena forma de lograrlo es diferenciar lo que realmente necesitas de lo que a veces sólo es un deseo.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">9 Compara precios y calidad</p>
                                </div>
                            </div>
                            <div class="content">
                                No te vayas por la primera opción, al comparar puedes obtener un ahorro significativo.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">10 Haz algo por tu retiro</p>
                                </div>
                            </div>
                            <div class="content">
                                Cuando dejes de trabajar seguramente querrás vivir de una forma cómoda, para lograrlo tendrás que ahorrar lo suficiente, hacer aportaciones voluntarias a tu Afore te permitirá lograrlo
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">11 Contrata un seguro de Gastos Médicos</p>
                                </div>
                            </div>
                            <div class="content">
                                No hay mejor regalo para ti y tus seres queridos que tenerlos asegurados, recuerda que un seguro los protege en caso de cualquier enfermedad o accidente.
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">12 Invierte tu dinero</p>
                                </div>
                            </div>
                            <div class="content">
                                Al hacerlo podrás generar un capital extra, siempre busca la opción que más te convenga, una buena opción es invertir en los Certificados de la Tesorería de la Federación, mejor conocidos como CETES.
                            </div>
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