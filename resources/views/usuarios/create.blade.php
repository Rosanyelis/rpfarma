@extends('layouts.app')
@section('styles')

@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Crear Usuario </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('usuarios') }}">Usuarios</a></li>
                        <li class="breadcrumb-item active">Crear Usuario</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form method="POST" action="{{ url('/usuarios/guardar-usuario') }}">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="NombreUsuario">Nombre y Apellido</label>
                                            <input type="text" name="nombre_completo"
                                                class="form-control @if ($errors->has('nombre_completo')) is-invalid @endif" id="NombreUsuario"
                                                placeholder="Ejm: Jon Doe" value="{{ old('nombre_completo') }}">
                                            @if ($errors->has('nombre_completo'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('nombre_completo') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="usuarios">Usuario</label>
                                            <input type="text" name="name" class="form-control @if ($errors->has('name')) is-invalid @endif"
                                                id="usuarios" placeholder="Ejm: Jon Laboratorio" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailInput">Correo Electrónico</label>
                                            <input type="email" name="email" class="form-control @if ($errors->has('email')) is-invalid @endif"
                                                id="emailInput" placeholder="Ejm: JonDoe@example.com" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rol">Rol</label>
                                            <select name="rol_id" class="form-control @if ($errors->has('rol_id')) is-invalid @endif">
                                                <option>Seleccione...</option>
                                                @foreach ($rols as $item)
                                                    <option value="{{ $item->id }}" @if ($item->id == old('rol_id')) selected @endif >{{ $item->descripcion }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('rol_id'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('rol_id') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contrasena">Contraseña</label>
                                            <input type="password" name="password"
                                                class="form-control @if ($errors->has('password')) is-invalid @endif" id="contrasena"
                                                placeholder="********">
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">
                                    Guardar</button>
                                <a href="{{ url('usuarios') }}" class="btn btn-secondary mr-4 float-right">
                                    Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('scritps')

@endsection
