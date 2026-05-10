@extends('layouts/plantilla')

@section('title', 'Modificar Empleado')

@push('styles')
    @vite('resources/css/empleadoformmodificar.css')
@endpush

@section('content')
    <div class="edit-container">
        <section class="edit-card">
            <form action="{{route('empleado.modificar', $empleado['id'])}}" method="POST" class="stack-form">
                @method('PUT')
                @csrf

                <div class="form-item">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" value="{{$empleado['nombre']}}" required>
                </div>
                <div class="form-item">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" value="{{$empleado['correo']}}" required>
                </div>
                <div class="form-item">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" value="{{$empleado['edad']}}">
                </div>
                <button type="submit" name="btn_enviarUsuario" class="btn-update">Actualizar Empleado</button>
            </form>
        </section>
    </div>
    
@endsection