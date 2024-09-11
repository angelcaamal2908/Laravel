@extends('dashboard')

@section('dashboard-content')
    <div class="container mt-4">
        <h2>Opción 5: Perfil</h2>
        <p>Visualiza y edita tu perfil de usuario.</p>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-user-circle"></i> Perfil del Usuario
            </div>
            <div class="card-body">
                <p>Información del perfil del usuario.</p>
                <button class="btn btn-primary"><i class="fas fa-edit"></i> Editar Perfil</button>
            </div>
        </div>
    </div>
@endsection

