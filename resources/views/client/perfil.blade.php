@extends('layout.baseDashboard')
@section('titulo', 'Dashboard Cliente')
@section('descripcion', 'Dashboard para los clientes')
@section('perfilUsuario')
    {{ route('perfilCliente') }}
@endsection
@section('sidenav')
    @component('client.sidenav')
    @endcomponent
@endsection
@section('main')
    @component('usuario.editar')
        @section('nombreUsuario', '*Nombre Usuario*')
    @endcomponent
@endsection
