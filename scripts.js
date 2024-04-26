// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function () {
    // Obtener el botón que abre el modal
    var btnAbrir = document.getElementById('botonCompartir');
    // Obtener el modal
    var modal = document.getElementById('modalCompartir');
    // Obtener el botón que cierra el modal
    var btnCerrar = document.getElementById('botonCerrar');
    // Obtener el botón que copia el enlace al portapapeles
    var botonCopiar = document.getElementById('botonCopiar');
    // Obtener el input que contiene el enlace a copiar
    var enlaceInput = document.querySelector('.enlaceCopiar input');

    // Función para abrir el modal de compartir
    function abrirModal() {
        modal.style.display = 'flex'; // Muestra el modal
        document.body.style.overflow = 'hidden'; // Deshabilita el desplazamiento del fondo
    }

    // Función para cerrar el modal de compartir
    function cerrarModal() {
        modal.style.display = 'none'; // Oculta el modal
        document.body.style.overflow = 'auto'; // Habilita el desplazamiento del fondo
    }

    // Event listener para abrir el modal
    if (btnAbrir) {
        btnAbrir.addEventListener('click', abrirModal);
    }

    // Event listener para cerrar el modal al hacer clic en el botón de cierre
    if (btnCerrar) {
        btnCerrar.addEventListener('click', cerrarModal);
    }

    // Event listener para cerrar el modal al hacer clic fuera de él
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            cerrarModal();
        }
    });

    // Copia el enlace al portapapeles
    botonCopiar.addEventListener('click', function () {
        navigator.clipboard.writeText(enlaceInput.value).then(function () {
            // Cambia el texto del botón a "¡Copiado!"
            botonCopiar.textContent = "¡Copiado!";

            // Espera 1 segundo antes de cambiar el texto de vuelta a "Copiar"
            setTimeout(() => {
                botonCopiar.textContent = "Copiar";
            }, 1000); // 1000 milisegundos = 1 segundo
        }).catch(err => {
            console.error('Error al copiar el texto: ', err);
        });
    });

    // Descarga código QR al presionar botón de descarga
    document.querySelector('.descargarQR').addEventListener('click', function () {
        var a = document.createElement('a');
        a.href = 'assets/qr-code.png'; // Ruta al archivo que deseas descargar
        a.download = 'qr-code.png'; // Nombre del archivo descargado
        document.body.appendChild(a); // Agrega el enlace al documento
        a.click(); // Simula un clic en el enlace
        document.body.removeChild(a); // Elimina el enlace del documento
    });

    // Inicialización de i18next para el manejo de internacionalización
    if (typeof i18next === 'undefined') {
        console.error('i18next is not loaded');
        return;
    }

    i18next.init({
        lng: 'es', // Idioma inicial. Utiliza detectores de idioma para configurar automáticamente
        debug: true, // Activa la depuración para ver información detallada en la consola
        resources: {
            en: {
                translation: {
                    "title": "Seismic Network of Puerto Rico",
                    "welcome": "Welcome! Explore the following links for quick access to resources, tools, and information related to earthquakes and tsunamis. You can also connect with us through our social networks, phone, and email. Educate, prepare, and be resilient.",
                    "icon1_link": "https://www.tsunamizone.org/puertorico/english/",
                    "icon2_link": "https://www.shakeout.org/puertorico/home.html",
                    "icon3": "Homepage",
                    "icon4": "Request Talks",
                    "icon4_link": "https://redsismica.uprm.edu/english/education/conference_request.php",
                    "icon5": "Educational Resources",
                    "icon5_link": "https://redsismica.uprm.edu/english/education/educative_resource.php",
                    "icon6": "Tsunami Portal",
                    "icon6_link": "https://redsismica.uprm.edu/english/tsunami/",
                    "icon8": "Evacuation Maps",
                    "icon8_link": "https://redsismica.uprm.edu/english/tsunami/evacuation_maps.php",
                    "share_this_page": "Share this Page",
                    "qr_download": "Download",
                    "share_on_twitter": "Share on Twitter",
                    "share_on_facebook": "Share on Facebook",
                    "mail": "Mail",
                    "share_on_email": "Share on Email",
                    "copy": "Copy",
                    "copyright": "Copyright © Seismic Network of Puerto Rico",
                    "lang": "Español/Spanish"
                }
            },
            es: {
                translation: {
                    "title": "Red Sísmica de Puerto Rico",
                    "welcome": "¡Bienvenidos! Explora los siguientes enlaces para que puedas acceder de manera rápida a recursos, herramientas e información relacionada a terremotos y tsunami. También puedes conectarte con nosotros a través de nuestras redes sociales, teléfono y correo electrónico. Edúcate, prepárate y se resiliente.",
                    "icon1_link": "https://www.tsunamizone.org/puertorico/",
                    "icon2_link": "https://www.shakeout.org/puertorico/",
                    "icon3": "Página principal",
                    "icon4": "Solicitud de Charlas",
                    "icon4_link": "https://redsismica.uprm.edu/spanish/educacion/solicitud_conferencia.php",
                    "icon5": "Recursos Educativos",
                    "icon5_link": "https://redsismica.uprm.edu/spanish/educacion/recursos_educativos.php",
                    "icon6": "Portal de tsunami",
                    "icon6_link": "https://redsismica.uprm.edu/spanish/tsunami/",
                    "icon8": "Mapas de Desalojo",
                    "icon8_link": "https://redsismica.uprm.edu/spanish/tsunami/mapas_desalojo.php",
                    "share_this_page": "Compartir esta página",
                    "qr_download": "Descargar",
                    "share_on_twitter": "Compartir en Twitter",
                    "share_on_facebook": "Compartir en Facebook",
                    "share_on_email": "Compartir en Email",
                    "copy": "Copiar",
                    "copyright": "Copyright © Red Sísmica de Puerto Rico",
                    "lang": "Inglés/English"
                }
            }
        }
    }, function (err, t) { // Función de callback después de inicializar i18next
        if (err) return console.error('Error al cargar i18next:', err);
        updateContent(); // Actualiza el contenido de la página según el idioma inicial
    });

    // Función para actualizar el contenido de la página con los textos traducidos
    function updateContent() {
        // Actualizar texto
        document.getElementById('tituloPagina').textContent = i18next.t('title');
        document.getElementById('lang-switch').textContent = i18next.t('lang');
        document.querySelector('.page-title').textContent = i18next.t('title');
        document.querySelector('.page-bioline').textContent = i18next.t('welcome');
        document.querySelector('.tituloModal').textContent = i18next.t('share_this_page');
        document.querySelector('.descargarQR').textContent = i18next.t('qr_download');
        document.querySelectorAll('.botonSharePg.twitter .textoCompartir')[0].textContent = i18next.t('share_on_twitter');
        document.querySelectorAll('.botonSharePg.facebook .textoCompartir')[0].textContent = i18next.t('share_on_facebook');
        document.querySelectorAll('.botonSharePg.email .textoCompartir')[0].textContent = i18next.t('share_on_email');
        document.getElementById('botonCopiar').textContent = i18next.t('copy');

        // Actualizar enlaces and alt texts
        const iconLinks = document.querySelectorAll('.contenedor-icono a');
        const resourceLinks = document.querySelectorAll('.contenedor-botones a');

        // Actualizar texto y enlaces de botones
        resourceLinks[0].href = i18next.t('icon1_link');
        resourceLinks[1].href = i18next.t('icon2_link');
        resourceLinks[2].querySelector('.titulo-item').textContent = i18next.t('icon3');
        resourceLinks[3].href = i18next.t('icon4_link');
        resourceLinks[3].querySelector('.titulo-item').textContent = i18next.t('icon4');
        resourceLinks[4].href = i18next.t('icon5_link');
        resourceLinks[4].querySelector('.titulo-item').textContent = i18next.t('icon5');
        resourceLinks[5].href = i18next.t('icon6_link');
        resourceLinks[5].querySelector('.titulo-item').textContent = i18next.t('icon6');
        resourceLinks[7].href = i18next.t('icon8_link');
        resourceLinks[7].querySelector('.titulo-item').textContent = i18next.t('icon8');

        // Actualizar footer copyright
        const currentYear = new Date().getFullYear();
        document.querySelector('footer p').textContent = i18next.t('copyright') + " " + currentYear;
    }

    // Función para cambiar el idioma de la página dinámicamente
    var langButton = document.getElementById('lang-switch');
    if (langButton) {
        langButton.addEventListener('click', function () {
            var newLng = i18next.language === 'en' ? 'es' : 'en';
            i18next.changeLanguage(newLng, function (err) {
                if (err) {
                    console.error('Error changing language:', err);
                    return;
                }
                updateContent();
            });
        });
    }

});
