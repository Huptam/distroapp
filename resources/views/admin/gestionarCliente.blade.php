@extends('layout.baseDashboard')
@section('titulo', 'Dashboard Administrador')
@section('descripcion', 'Dashboard para los administradores')
@section('perfilUsuario')
    {{ route('perfilAdmin') }}
@endsection
@section('sidenav')
    @component('admin.sidenav')
    @endcomponent
@endsection
@section('main')
    @component('usuario.gestionar')
        @section('tipoUsuario', 'Clientes')
        @section('tipoUsuario_Tabla', 'Clientes')
    @endcomponent
@endsection
