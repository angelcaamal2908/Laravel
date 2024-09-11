{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('sidebar')
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
@endsection

@section('content')
    <div class="dashboard">
        <div class="content">
         
            {{-- Aquí se incluirá el contenido específico de la opción seleccionada --}}
            @yield('dashboard-content')
        </div>
    </div>
@endsection
