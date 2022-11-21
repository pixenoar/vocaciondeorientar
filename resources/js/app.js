// Default

    import './bootstrap';

    import Alpine from 'alpinejs';

    window.Alpine = Alpine;

    Alpine.start();


// Bootstrap

    import 'bootstrap';

// Pixeno

    const modal = new bootstrap.Modal('#menuModal');
    document.getElementById("menuModal").addEventListener("click", ocultar);
    function ocultar(){ modal.hide(); }
