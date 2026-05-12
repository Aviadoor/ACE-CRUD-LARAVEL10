@extends('layouts/plantilla')

@section('title', 'Formulario')

@push('styles')
    @vite(['resources/css/empleadoform.css']) 
@endpush
@section('content')
    @include('layouts/navUser')
    <main class="container">
        <header class="header">
            <h1>Gestión de Usuarios</h1>
            <p>Agrega nuevos registros o gestiona los existentes.</p>
        </header>

        <section class="form-card">
            <h2>Registrar Nuevo Usuario</h2>
            <form method="POST" class="grid-form">
                
                @csrf

                <div class="input-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>
                <div class="input-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                </div>
                <div class="input-group">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" placeholder="18">
                </div>
                <button type="submit" name="btn_enviarUsuario" class="btn-primary">Registrar Usuario</button>
            </form>
        </section>

        <section class="table-card">
            <h2>Listado de Usuarios</h2>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empleados as $empleado)
                            <tr>
                                <td>{{$empleado['id']}}</td>
                                <td><strong>{{$empleado['nombre']}}</strong></td>
                                <td>{{$empleado['correo']}}</td>
                                <td>{{$empleado['edad']}}</td>
                                <td class="actions">
                                    <a href="{{route('empleado.form.modificar', $empleado['id'])}}" class="btn-edit">Actualizar</a>
                                    <form action="{{route('empleado.eliminar', $empleado['id'])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    
@endsection