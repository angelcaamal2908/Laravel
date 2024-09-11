@extends('dashboard')

@section('dashboard-content')
    <div class="container mt-4">
        <h2>Opción 1: Menu</h2>
        <p>Bienvenido a la sección de menú. Aquí encontrarás un resumen general de las funcionalidades principales y accesos rápidos a las secciones más importantes.</p>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-tachometer-alt"></i> Resumen del Sistema
                    </div>
                    <div class="card-body">
                        <p>Visión general del estado del sistema.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-bolt"></i> Accesos Rápidos
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="{{ route('dashboard.option2') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-users"></i> Administrar Usuarios
                            </a>
                            <a href="{{ route('dashboard.option3') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-chart-line"></i> Ver Informes
                            </a>
                            <a href="{{ route('dashboard.option4') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-cogs"></i> Configuraciones
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
