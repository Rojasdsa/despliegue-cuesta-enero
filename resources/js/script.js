'use strict'

/* ----------------------------------------------------------*/
/* Agitar el icono de git y al hacer click te lleva a github */

function agitarAutomaticamente() {
    let gitLogo = document.getElementById('gitLogo');
    gitLogo.classList.add('agitacion');

    // Elimina la clase de agitación después de la duración de la animación
    setTimeout(function () {
        gitLogo.classList.remove('agitacion');
    }, 500);
}

// Agitar automáticamente cada 3 segundos (3000 milisegundos)
setInterval(agitarAutomaticamente, 3000);