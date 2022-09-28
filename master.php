<?php

class plantilla {

    public static $instancia = null;

    public static function aplicar() {
        self::$instancia = new plantilla();
    }

    public function __construct() {
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <title>Animales</title>
            
        </head>
        <body>
        <style>
            .nav-wrapper, .page-footer {
                background-color: #06283D
            }

            b {
                color: #06283D
            }

            @media print {
                .no-print {
                    display: none;
                }

                h3 {
                    color: red;
                }
            }

        </style>

        <nav class="no-print">
            <div class="nav-wrapper" style="padding: 0 20px;">
            <a href="#" class="brand-logo">Animales ITLA</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/inicio.php">Inicio</a></li>
                <li><a href="/index.php">Registro</a></li>
                <li><a href="/mapa.php">Mapa</a></li>
                <li><a href="/reporte.php">Reporte Animal</a></li>
                <li><a href="/acercaDe.php">Acerca de..</a></li>
            </ul>
            </div>
        </nav>

<?php 

    }

    public function __destruct() {
        ?>

        <footer class="page-footer no-print" style="margin-top: 50px;">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Animales del ITLA</h5>
                    <p class="grey-text text-lighten-4">Hecho por Haroldy Martinez</p>
                </div>
            </div>
            
            <div class="footer-copyright"></div>
        </footer>
    </body>
    </html>

    <?php

    }
}







