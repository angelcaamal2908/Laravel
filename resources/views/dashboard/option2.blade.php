@extends('dashboard')

@section('dashboard-content')
    <div class="container mt-4">
        <h2>Opción 2: Usuarios</h2>
        <p>Gestiona los usuarios desde esta sección.</p>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-users"></i> Lista de Usuarios
            </div>
            <div class="card-body">
                <p>Aquí verás la lista de usuarios.</p>
                <button class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Nuevo Usuario</button>
            </div>
        </div>
    </div>
@endsection

