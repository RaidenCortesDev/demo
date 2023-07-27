@extends('layouts.structure')

<nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('reglamentos') }}">Reglamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('redes') }}">Redes sociales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tutoriales') }}">Tutoriales</a>
                </li>
            </ul>
        </div>
        <button id="themeButton" class="btn" onclick="cambiarTema()">
            <i class="bi bi-brightness-high-fill"></i><!-- Ícono por defecto (tema claro) -->
        </button>
    </div>
</nav>

<script>
    function cambiarTema() {
        const body = document.body;
        const themeButton = document.getElementById('themeButton');
        const isDarkTheme = body.classList.contains('bg-dark');

        if (isDarkTheme) {
            body.classList.remove('bg-dark', 'text-white', 'navbar-dark');
            body.classList.add('bg-light', 'text-dark', 'navbar-light');
            themeButton.innerHTML = '<i class="bi bi-brightness-high"></i>'; // Ícono para tema claro
            localStorage.setItem('theme', 'light'); // Guardar preferencia en localStorage
        } else {
            body.classList.remove('bg-light', 'text-dark', 'navbar-light');
            body.classList.add('bg-dark', 'text-white', 'navbar-dark');
            themeButton.innerHTML = '<i class="bi bi-moon-fill"></i>'; // Ícono para tema oscuro
            localStorage.setItem('theme', 'dark'); // Guardar preferencia en localStorage
        }
    }

    // Función para cargar el tema guardado en localStorage al cargar la página
    function cargarTema() {
        const body = document.body;
        const themeButton = document.getElementById('themeButton');
        const theme = localStorage.getItem('theme');

        if (theme === 'dark') {
            body.classList.remove('bg-light', 'text-dark', 'navbar-light');
            body.classList.add('bg-dark', 'text-white', 'navbar-dark');
            themeButton.innerHTML = '<i class="bi bi-moon-fill"></i>'; // Ícono para tema oscuro
        } else {
            body.classList.remove('bg-dark', 'text-white', 'navbar-dark');
            body.classList.add('bg-light', 'text-dark', 'navbar-light');
            themeButton.innerHTML = '<i class="bi bi-brightness-high"></i>'; // Ícono para tema claro
        }
    }

    // Cargar el tema al cargar la página
    cargarTema();
</script>




