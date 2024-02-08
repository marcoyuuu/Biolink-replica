// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {

  // Función para abrir el modal de compartir
  function abrirModal() {
      document.getElementById('shareModal').style.display = 'block';
  }

  // Función para cerrar el modal de compartir
  function cerrarModal() {
      document.getElementById('shareModal').style.display = 'none';
  }

  // Cierra el modal si se hace clic fuera de él
  function cerrarModalExterno(event) {
      if (event.target == document.getElementById('shareModal')) {
          cerrarModal();
      }
  }

  // Evento para abrir el modal
  document.getElementById('openModalBtn').addEventListener('click', abrirModal);

  // Evento para cerrar el modal con el botón de cerrar
  document.getElementById('closeModalBtn').addEventListener('click', cerrarModal);

  // Evento para cerrar el modal haciendo clic fuera de él
  window.addEventListener('click', cerrarModalExterno);
});
