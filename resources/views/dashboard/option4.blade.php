@extends('dashboard')

@section('dashboard-content')
    <div class="container mt-4">
        <h2>Opción 4: Configuraciones</h2>
        <p>Ajusta las configuraciones globales desde esta sección.</p>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-cogs"></i> Configuraciones Generales
            </div>
            <div class="card-body">
                <p>Aquí puedes modificar las configuraciones generales.</p>
                <button class="btn btn-success"><i class="fas fa-save"></i> Guardar Cambios</button>
            </div>
        </div>
    </div>
@endsection

