<?php
$tituloPagina = "Red Sísmica de Puerto Rico";
$añoActual = date("Y");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>
</head>

<body>

    <div class="contenedor-principal">
        <header>
            <button id="openModalBtn" class="boton-compartir">Compartir Esta Página</button>
            <img src="assets/logo.png" class="logo" alt="Logo de la Red Sísmica de Puerto Rico">
            <h1 class="page-title">Red Sísmica de Puerto Rico</h1>
            <h2 class="page-bioline">Bienvenido a la Red Sísmica de Puerto Rico. Este sitio ofrece información y recursos relacionados con la sismología en Puerto Rico.</h2>
        </header>

        <main>
            <!-- Iconos/enlaces -->
            <div class="contenedor-icono">
                <a href="mailto:charlas@prsnmail.uprm.edu"><img src="assets\mail.png" alt="Mail"></a>
                <a href="https://www.facebook.com/redsismicadepuertorico"><img src="assets\facebook.png" alt="Facebook"></a>
                <a href="tel:+17878338433"><img src="assets\phone.png" alt="Phone"></a>
                <a href="https://instagram.com/redsismicapr"><img src="assets\instagram.png" alt="Instagram"></a>
                <a href="https://www.youtube.com/redsismicapr"><img src="assets\youtube.png" alt="YouTube"></a>
                <a href="https://twitter.com/redsismica"><img src="assets\x.png" alt="Twitter"></a>
            </div>
        </main>

        <!-- Botones -->
        <div class="contenedor-botones">
            <a href="https://www.tsunamizone.org/puertorico/" class="boton">
                <img src="assets/cwave.png" alt="Icon">
                <span class="item-title">Caribe Wave</span>
            </a>
            <a href="https://redsismica.uprm.edu/" class="boton">
                <img src="assets/princ.png" alt="Icon">
                <span class="item-title">Página principal</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/educacion/solicitud_conferencia.php" class="boton">
                <img src="assets/char.png" alt="Icon">
                <span class="item-title">Solicitud de Charlas</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/educacion/recursos_educativos.php" class="boton">
                <img src="assets/edu.png" alt="Icon">
                <span class="item-title">Recursos Educativos</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/tsunami/" class="boton">
                <img src="assets/tsu.png" alt="Icon">
                <span class="item-title">Portal de tsunami</span>
            </a>
            <a href="https://prddst.uprm.edu/" class="boton">
                <img src="assets/maptool.png" alt="Icon">
                <span class="item-title">Map tool</span>
            </a>
            <a href="https://redsismica.uprm.edu/spanish/tsunami/mapas_desalojo.php" class="boton">
                <img src="assets/map.png" alt="Icon">
                <span class="item-title">Mapas de Desalojo</span>
            </a>
            <a href="https://www.shakeout.org/puertorico/" class="boton">
                <img src="assets/shake.png" alt="Icon">
                <span class="item-title">Shake Out</span>
            </a>

        </div>

        <div id="shareModal" class="modal">
            <div class="contenido-modal">
                <span id="closeModalBtn" class="cerrar-modal">&times;</span>
                <h2>Compartir esta página</h2>
                <h2>Compartir esta página</h2>
                <!-- Placeholders for sharing options -->
                <div>Twitter, Facebook, Email buttons here</div>
                <!-- Placeholder for QR Code -->
                <div id="qrCode"></div>
                <!-- Placeholder for copy link feature -->
                <div id="copyLinkContainer">
                    <button id="copyLinkBtn">Copy Link</button>
                    <p id="pageLink">Your Page URL here</p>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; <?php echo $añoActual; ?> Red Sísmica de Puerto Rico</p>
        </footer>
    </div>

    <script src="scripts.js"></script>
</body>

</html>