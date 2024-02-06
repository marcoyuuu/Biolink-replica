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
            color: #000000;
            margin: 24px 0px 48px;
            padding: 0px 0px 100px;
        }

        .page-full-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            /* Adjust based on preference */
            margin: auto;
        }

        .display-image {
            width: 96px;
            height: 96px;
            margin: 0px auto;
            display: block;
        }

        .page-item-each {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffcd62;
            /* Button fill color */
            border-radius: 30px;
            /* Adjust as needed for oval shape */
            width: 100%;
            /* Match the size of the div wrapper */
            text-align: center;
            font-family: 'Inter', sans-serif;
            padding: 10px;
            /* Adjust padding to fit content */
            margin: 10px auto;
            /* Center buttons and add space between them */
            transition: all 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .page-item-each:hover {
            transform: scale(1.05);
            /* Button grows on hover */
        }

        /* Assuming you're adding an <img> inside .page-item-each for the photo */
        .page-item-each img {
            width: 30px;
            /* Adjust based on your preference */
            height: 30px;
            border-radius: 50%;
            margin-right: 15px;
            /* Adjust based on your preference */
        }

        .item-title {
            text-align: center;
            color: #000000;
            font-family: 'Inter', sans-serif;
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
            gap: 20px;
            width: 5%;
            /* Set the container width to 50% of its parent */
            margin: auto;
            /* Center the container */
        }

        .icon-container img {
            width: 24px;
            /* Adjust the width as needed */
            height: 24px;
            /* Adjust the height to maintain aspect ratio */
            object-fit: contain;
            /* Ensures the image fits nicely without distortion */
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
        <div>
            <a href="https://www.tsunamizone.org/puertorico/" class="page-item-each"><span class="item-title">Caribe Wave</span> </a>
            <a href="https://redsismica.uprm.edu/" class="page-item-each"><span class="item-title">Página principal</span></a>
            <a href="https://redsismica.uprm.edu/spanish/educacion/solicitud_conferencia.php" class="page-item-each"><span class="item-title">Solicitud de Charlas</span></a>
            <a href="https://redsismica.uprm.edu/spanish/educacion/recursos_educativos.php" class="page-item-each"><span class="item-title">Recursos Educativos</span></a>
            <a href="https://redsismica.uprm.edu/spanish/tsunami/" class="page-item-each"><span class="item-title">Portal de tsunami</span></a>
            <a href="https://prddst.uprm.edu/" class="page-item-each"><span class="item-title">Map tool</span></a>
            <a href="https://redsismica.uprm.edu/spanish/tsunami/mapas_desalojo.php" class="page-item-each"><span class="item-title">Mapas de Desalojo</span></a>
            <a href="https://www.shakeout.org/puertorico/" class="page-item-each"><span class="item-title">Shake Out</span></a>
        </div>
    </div>
</body>

</html>