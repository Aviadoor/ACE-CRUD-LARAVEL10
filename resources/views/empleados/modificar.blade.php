@extends('layouts/plantilla')

@section('title', 'Modificar Empleado')

@section('content')
    <main class="container">
        <section class="form-card">
            <form action="{{route('empleado.modificar', $empleado['id'])}}" method="POST" class="grid-form">
                @method('PUT')
                @csrf

                <div class="input-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" value="{{$empleado['nombre']}}" required>
                </div>
                <div class="input-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" value="{{$empleado['correo']}}" required>
                </div>
                <div class="input-group">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" value="{{$empleado['edad']}}">
                </div>
                <button type="submit" name="btn_enviarUsuario" class="btn-primary">Registrar Usuario</button>
            </form>
        </section>
    </main>
    
@endsection