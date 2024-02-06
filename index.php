<?php
// PHP variables for dynamic content
$pageTitle = "Your Page Title";
$heading = "Welcome to My Website";
$paragraph = "This is a sample paragraph to show how to mix HTML and PHP.";

// Date for footer
$currentYear = date("Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Sísmica de Puerto Rico</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-image: url('assets/faro_bg.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            color: #000000;
            margin: 24px 0px 48px;
            padding: 0px 0px 100px;
        }

        .page-full-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 52.5%;
            /* Adjust based on preference */
            margin: auto;
            width: 100%;
        }

        .display-image {
            width: 96px;
            height: 96px;
            margin: 0px auto;
            display: block;
        }

        .buttons-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .page-item-each {
            background-color: #ffcd62;
            border-radius: 50px;
            width: 650px;
            padding: 10px;
            margin-bottom: 15px;
            text-decoration: none;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .page-item-each:hover {
            transform: scale(1.05);
        }

        .page-item-each img {
            order: -1;
            margin-left: 5px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .item-title {
            text-align: center;
            color: #000000;
            font-family: 'Inter', sans-serif;
            flex-grow: 1;
            text-align: center;
        }

        h1 {
            display: block;
            font-size: 1.125em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 0px;
        }

        h2 {
            display: block;
            font-size: 1em;
            margin-block-start: 0.83em;
            margin-block-end: 0.83em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            text-align: center;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .icon-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            width: 5%;
            /* Set the container width to 50% of its parent */
            margin: auto;
            /* Center the container */
            margin-bottom: 35px;
        }

        .icon-container img {
            width: 30px;
            /* Adjust the width as needed */
            height: 30px;
            /* Adjust the height to maintain aspect ratio */
            object-fit: contain;
            /* Ensures the image fits nicely without distortion */
        }

        .display-image {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="page-full-wrap">
        <img src="assets\logo.png" id="displayimage" class="display-image" alt="Logo">
        <h1 class="page-title">Red Sísmica de Puerto Rico</h1>
        <h2 class="page-bioline">Nuestra misión es monitorear y determinar rápidamente un terremoto.</h2>
        <!-- Iconos/enlaces -->
        <div class="icon-container">
            <a href="mailto:charlas@prsnmail.uprm.edu"><img src="assets\mail.png" alt="Mail"></a>
            <a href="https://www.facebook.com/redsismicadepuertorico"><img src="assets\facebook.png" alt="Facebook"></a>
            <a href="tel:+17878338433"><img src="assets\phone.png" alt="Phone"></a>
            <a href="https://instagram.com/redsismicapr"><img src="assets\instagram.png" alt="Instagram"></a>
            <a href="https://www.youtube.com/redsismicapr"><img src="assets\youtube.png" alt="YouTube"></a>
            <a href="https://twitter.com/redsismica"><img src="assets\x.png" alt="Twitter"></a>
        </div>

        <!-- Botones -->
        <div class="buttons-container">
            <a href="https://www.tsunamizone.org/puertorico/" class="page-item-each">
                <img src="assets/cwave.png" alt="Icon">
                <span class="item-title">Caribe Wave</span>
            </a>
            <a href="https://redsismica.uprm.edu/" class="page-item-each">
                <img src="assets/princ.png" alt="Icon">
                <span class="item-title">Página principal</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/educacion/solicitud_conferencia.php" class="page-item-each">
                <img src="assets/char.png" alt="Icon">
                <span class="item-title">Solicitud de Charlas</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/educacion/recursos_educativos.php" class="page-item-each">
                <img src="assets/edu.png" alt="Icon">
                <span class="item-title">Recursos Educativos</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/tsunami/" class="page-item-each">
                <img src="assets/tsu.png" alt="Icon">
                <span class="item-title">Portal de tsunami</span>
            </a>
            <a href="https://prddst.uprm.edu/" class="page-item-each">
                <img src="assets/maptool.png" alt="Icon">
                <span class="item-title">Map tool</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/tsunami/mapas_desalojo.php" class="page-item-each">
                <img src="assets/map.png" alt="Icon">
                <span class="item-title">Mapas de Desalojo</span>
                </a>
            <a href="https://www.shakeout.org/puertorico/" class="page-item-each">
                <img src="assets/shake.png" alt="Icon">
                <span class="item-title">Shake Out</span>
            </a>
        </div>
    </div>
</body>

</html>