<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        /* Generales */
        @font-face {
            font-family: "Roboto";
            src: url("fonts/Roboto-Regular.ttf");
        }
        html {
            box-sizing: border-box;
        }
        *, *:before, *:after {
            box-sizing: inherit;
        }
        body {
            font-family: 'Roboto';
            margin: 0;
        }
        .mayus {
            text-transform: uppercase;
        }
        img {
            max-width: 100%;
        }
        
        /***** PÁGINA 1 *****/
        /* Barra Titulo */
        .barra {
            width: 100%;
            min-height: 120px;
            margin: auto;
            margin-top: 2px;
            background-color: #010B40;
            border: #D49700 3px solid;
            padding: 10px 40px;
        }
        .barra * {
            color: #fff;
            font-style: italic;
            margin: 4px;
        }
        h1 {
            font-size: 34px;
            text-align: center;
        }
        .barra h2 {
            font-size: 20px;
        }
        .barra h3 {
            font-size: 14px;
        }
        .logo {
            width: 100px;
            position: absolute;
            top: 50px;
            left: 82%;
        }

        /* Info subtitulo */
        .subtitulo-informativo {
            margin-bottom: 10px;
        }
        .subtitulo-informativo * {
            text-align: center;
            margin: 2px;
        }
        .subtitulo-informativo h3 {
            margin-top: 6px;
            font-size: 16px;
        }
        
        /* Contenido */
        .columna {
            width: 30%;
            height: 840px;
            border: #010B40 3px solid;
            padding: 0;
        }
        .columna table {
            margin: auto;
            font-size: 10px;
            margin-top: 7px;
        }
        .columna table td, .columna table th{
            padding: 3px;
            font-weight: normal;
        }
        .contenido {
            position: relative;
        }
        .titulo {
            background-color: #010B40;
        }
        .titulo h4 {
            color: #fff;
            font-size: 12px;
            font-weigth: normal;
            text-align: center;
        }
        #dia-temp {
            
        }
        #reporte {
            position: absolute;
            left: 30%;
            width: 40%;
            border-left: none;
            border-right: none;
            padding: 0 24px;
        }
        #reporte p {
            font-size: 11px;
        }
        #varios {
            position: absolute;
            left: 70%;
            width: 29%;
        }

        /* Cajas columna 3 */
        .caja {
            padding: 16px 10px;
        }
        .caja p {
            text-align: center;
            margin: 3px;
            font-size: 12px;
        }
        .result-anterior .caja p {
            margin: 10px 0;
        }
        #barra-inf {
            position: relative;
            top: -4px;
            padding: 25px;
        }

        /***** PÁGINA 2 *****/
        .sem-roster {
            background-color: #010B40;
            margin: 22px;
            padding: 4px;
        }
        .sem-roster h3 {
            text-align: center;
            color: #fff;
            font-style: italic;
            margin: 0;
        }
        .contenido-roster {
            width: 70%;
            margin: auto;
            height: 620px;
        }
        .titulo-roster {
            position: relative;
            text-align: center;
            padding-left: 30px;
        }
        .titulo-roster h4 {
            font-weight: bolder;
            font-size: 18px;
        }
        .logo-roster {
            top: -12px;
            left: 38px;
            width: 50px;
        }
        table.roster {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
        }
        table.roster th{
            text-align: center;
            background-color: #ABBDFF;
        }
        table.roster th, table.roster td{
            padding: 2px 10px 2px 6px;
        }
        .datos-tecnicos {
            width: 70%;
            margin: auto;
            text-align: center;
        }
        .datos-tecnicos h4 {
            margin-top: 30px;
            margin-bottom: 16px;
        }
        .datos-tecnicos span {
            font-weight: bold;
            font-style: italic;
        }
        .datos-tecnicos p {
            margin: 0;
            line-height: 18px;
        }
        #barra-inf2 {
            margin-top: 60px;
            padding: 48px;
        }
    </style>
    <title>Boletin</title>
</head>
<body>
    <div class="pag-1">
        <div class="barra">
            <h2>REPORTE DE PRENSA</h2>
            <h1>Navegantes del Magallanes</h1>
            <h3>12 titulos de la LVBP, 2 Series del Caribe</h3>
            <div class="logo">
                <img src="Logo M.png" alt="Logo Magallanes">
            </div>
        </div>

        <div class="subtitulo-informativo">
            <h3>Navegantes del Magallanes(69 69) Vs. New York Yankees (F F)</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            <p>Transmision TV: DirecTv Sports</p>
        </div>
        
        <div class="contenido">
        
            <div class="columna" id="dia-temp">
                <div class="titulo">
                    <h4 class="mayus">Día a Día / Temporada Regular</h4>
                </div>
                <?php
                schedule_mag();
                ?>
            </div><!--.columna-->
        
            <div class="columna" id="reporte">
                <p>Integer quis aliquam velit. Nullam tincidunt neque ut tempus semper. Morbi tincidunt volutpat placerat. Vestibulum dignissim, mauris eu tincidunt rhoncus, magna urna posuere purus, quis convallis libero nibh nec arcu. Nullam ullamcorper ligula sed lorem facilisis tincidunt. Curabitur bibendum enim ut tincidunt sodales. Phasellus non lobortis velit. Sed dignissim, enim non viverra elementum, urna leo convallis risus, a posuere odio diam id tellus. Morbi in ante a ante cursus posuere. Fusce ultrices et neque non malesuada. Pellentesque sit amet mauris id urna pellentesque interdum eu nec sapien.</p>
                <p>Nunc dignissim nibh eros, a sollicitudin diam efficitur vitae. Pellentesque laoreet eros a diam porttitor semper. In congue semper gravida. Vestibulum iaculis nisl in eros facilisis, a semper enim bibendum. Phasellus et faucibus odio. Sed sed purus malesuada, fermentum dui eget, congue ante. Vestibulum vulputate molestie elit sed tincidunt. Suspendisse sed laoreet risus. Integer tincidunt tortor nisl, quis vulputate ligula pellentesque eu. Nullam non auctor ligula. Phasellus tempor leo ut neque ultricies luctus.</p>
                <p>Pellentesque id elit ut justo auctor consectetur. Duis laoreet congue lacus, non tristique tortor faucibus sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam efficitur nec felis non ullamcorper. Nam eu placerat mi. Vivamus vel justo pharetra, suscipit ligula nec, suscipit est. Curabitur a nibh eget leo auctor elementum. Duis mattis feugiat viverra. Morbi sed sem id orci ornare interdum ut in tellus. Vestibulum tincidunt quam risus, in finibus leo viverra ut. Fusce ut tellus lorem. Cras at nulla mi. Sed maximus, libero vel interdum ornare, nibh orci iaculis ipsum, et tristique risus ligula laoreet diam. Integer elementum vitae sapien quis condimentum. Fusce lacinia ante quis enim pellentesque, ut porta sapien molestie.</p>
                <p>Etiam dictum augue augue, in tincidunt nunc pulvinar quis. Mauris gravida est at ex tempor tincidunt. Etiam lacinia congue auctor. Mauris non pretium magna, non venenatis nunc. Praesent egestas enim ac mi molestie, eu finibus metus laoreet. Integer in purus aliquet, placerat magna ac, gravida turpis. In eget tincidunt nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eget lacinia turpis, ac lobortis magna. Donec tempus felis nulla, sit amet ullamcorper augue dictum quis. Aliquam rhoncus a urna non semper. Ut at nibh aliquam, blandit mi sed, rutrum eros. Proin tempus dapibus blandit. Curabitur non porttitor metus. Ut luctus neque lacus, eget laoreet dui elementum non. Pellentesque sagittis tellus vel massa maximus maximus.</p>
            </div><!--.columna-->
        
            <div class="columna" id="varios">
                <div class="juegos-dia">
                    <div class="titulo">
                        <h4>JUEGOS DEL DÍA</h4>
                    </div>
                    <div class="caja">
                        <?php
                            gameday();
                        ?>
                    </div>
                </div>
                <div class="arbitros">
                    <div class="titulo">
                        <h4>ÁRBITROS</h4>
                    </div>
                    <div class="caja">
                        <?php
                            umpire();
                        ?>
                    </div>
                </div>
                <div class="posiciones">
                    <div class="titulo">
                        <h4>TABLA DE POSICIONES</h4>
                    </div>
                    <div class="caja">
                        <?php
                            tabla();
                        ?>
                    </div><!--,caja-->
                </div>
                <div class="result-anterior">
                    <div class="titulo">
                        <h4>RESULTADOS DEL DÍA ANTERIOR</h4>
                    </div>
                    <div class="caja">
                        <?php
                            lastdaygame();
                        ?>
                    </div>
                </div>
            </div><!--.columna-->
        </div><!--.contenido-->
        <div class="barra" id="barra-inf"></div>
    </div>

    <!---- PÁGINA 2 ---->
    <div class="pag-2">
        <div class="barra">
            <h2>REPORTE DE PRENSA</h2>
            <h1>Navegantes del Magallanes</h1>
            <h3>12 titulos de la LVBP, 2 Series del Caribe</h3>
            <div class="logo">
                <img src="Logo M.png" alt="Logo Magallanes">
            </div>
        </div>
        <div class="sem-roster">
            <h3 class="mayus">Roster de la Semana</h3>
        </div>

        <div class="contenido-roster">
            <div class="titulo-roster">
                <div class="logo logo-roster">
                    <img src="Logo M.png" alt="Logo Magallanes">
                </div>
                <h4>ROSTER NAVEGANTES DEL MAGALLANES BBC</h4>
            </div>
            <table class="roster" border="1">
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PO.</th>
                    <th scope="col">B</th>
                    <th scope="col">T</th>
                    <th scope="col">H/W</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Birthplace</th>
                    <th scope="col">Org.</th>
                    <th scope="col">League</th>
                </tr>
                <?php
                    roster_week();
                ?>
            </table>
        </div><!--.contenido-roster-->

        <div class="datos-tecnicos">
            <h4>STAFF TÉCNICO</h4>
            <p><span>Mánager:</span> Enrique Reyes (50); <span>Coach de Banca:</span> Luis Carlos Rivera (16); <span>Coach de Bateo:</span> 
            Carlos Mendoza (45); <span>Coach de Primera Base:</span> Nelson Escalona (25); <span>Coach de Tercera Base:</span> 
            Félix Escalona (53); <span>Coach de Pitcheo: </span>Ramón García (32); <span>Coach de Bullpen: </span>Luis Rodríguez (79); 
            <span>Catchers de Bullpen: </span>Nabor Jablonskis (74) y Geremi Natera.</p>
        </div>
        <div class="barra" id="barra-inf2"></div>
    </div><!--.pag-2-->
</body>
</html>