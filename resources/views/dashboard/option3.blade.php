@extends('dashboard')

@section('dashboard-content')
    <div class="container mt-4">
        <h2>Opción 3: Informes</h2>
        <p>Genera y visualiza informes desde esta sección.</p>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-file-alt"></i> Informes Disponibles
            </div>
            <div class="card-body">
                <p>Lista de informes disponibles.</p>
                <button class="btn btn-primary"><i class="fas fa-plus"></i> Generar Nuevo Informe</button>
            </div>
        </div>
    </div>
@endsection

