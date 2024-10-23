<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=PACIFICO&display=swap" rel="stylesheet">
    <!-- Incluir Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Header con imagen de fondo */
        .header {
            background-image: url('{{ asset('imagenes/logo.png') }}');
            background-size: cover;
            background-position: center;
            height: 100px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .dashboard {
            display: flex;
            margin-top: 100px;
        }

        .sidebar {
            width: 220px;
            background: #343a40;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 100px;
            left: 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            color: white;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 240px;
            background-color: #ffffff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
            border-radius: 10px;
            margin-top: 20px;
        }

        .sidebar a {
            display: block;
            color: #adb5bd;
            padding: 10px 15px;
            text-decoration: none;
            margin-bottom: 10px;
            border-radius: 4px;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }

        .sidebar a.active {
            background-color: #007bff;
            color: white;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .sidebar .options-title {
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #ced4da;
        }

        /* Eliminar viñetas de las listas */
        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .content h2 {
            margin-top: 0;
        }

        /* Ajustes responsivos */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
                top: 0;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1>Mi Aplicación</h1>
        <div>
            <i class="fas fa-user-circle fa-2x"></i>
        </div>
    </div>

    <!-- Estructura del dashboard -->
    <div class="dashboard">
        <!-- Barra lateral -->
        <div class="sidebar">
            <h3 class="options-title">Menú Principal</h3>
            <ul>
                <li>
                    <a href="{{ route('dashboard.option1') }}" class="{{ request()->routeIs('dashboard.option1') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Menu
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.option2') }}" class="{{ request()->routeIs('dashboard.option2') ? 'active' : '' }}">
                        <i class="fas fa-user"></i> Usuarios
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.option3') }}" class="{{ request()->routeIs('dashboard.option3') ? 'active' : '' }}">
                        <i class="fas fa-user"></i> Informes
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.option4') }}" class="{{ request()->routeIs('dashboard.option4') ? 'active' : '' }}">
                        <i class="fas fa-user"></i> Configuraciones
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.option5') }}" class="{{ request()->routeIs('dashboard.option5') ? 'active' : '' }}">
                        <i class="fas fa-user"></i> Perfil
                    </a>
                </li>
            </ul>
        </div>

        <!-- Contenido principal -->
        <div class="content">
            <h2>Bienvenido al Dashboard</h2>
            {{-- Aquí se incluirá el contenido específico de la opción seleccionada --}}
            <!-- Puedes agregar más contenido aquí si es necesario -->
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

