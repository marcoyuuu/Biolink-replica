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

});