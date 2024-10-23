<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=PACIFICO&display=swap" rel="stylesheet">
    
    <!-- Incluir Font Awesome para iconos -- Version Boostrap
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    -->




    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        /* Header con imagen de fondo */
        .header {
            background-image: url('{{ asset('imagenes/logo.png') }}'); /* Conserva tu imagen */
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
            list-style-type: none; /* Elimina las viñetas de la lista */
            padding-left: 0; /* Elimina el margen izquierdo por defecto */
        }

        li {
            margin-bottom: 10px; /* Añade espacio entre los elementos de la lista */
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
            @yield('sidebar') <!-- Aquí se cargan las opciones del sidebar desde cada vista -->
        </div>

        <!-- Contenido principal -->
        <div class="content">
            @yield('content') <!-- Aquí se cargará el contenido principal de cada vista -->
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
