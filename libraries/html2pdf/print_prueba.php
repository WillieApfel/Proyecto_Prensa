<?php
include 'functions_pdf.php';
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
        .columna table th{
            padding: 3px;
            font-weight: normal;
        }
        .columna table td {
            padding: 2px;
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
            left: 104px;
            width: 50px;
        }
        table.roster {
            max-width: 100%;
            margin: auto;
            border-collapse: collapse;
        }
        table.roster th{
            text-align: center;
            background-color: #ABBDFF;
        }
        table.roster th, table.roster td{
            padding: 2px 10px 2px 6px;
            font-size: 11px;
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
            margin-top: 20px;
            padding: 57px;
        }
    </style>
    <title>Boletin</title>
</head>
<body>
    <div class="pag-1">
        <div class="barra">
            <h2>REPORTE DE PRENSA</h2>
            <h1>Navegantes del Magallanes</h1>
            <?php membrete(); ?>
            <div class="logo">
                <img src="Logo M.png" alt="Logo Magallanes">
            </div>
        </div>

        <div class="subtitulo-informativo">
            <?php encabezado(); ?>
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
                <?php redact(); ?>    
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
            <h2>ROSTER DE LA SEMANA</h2>
            <h1>Navegantes del Magallanes</h1>
            <?php membrete(); ?>
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