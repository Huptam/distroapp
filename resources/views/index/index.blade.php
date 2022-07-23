@extends('layout.base')
@section('titulo', 'Inicio')
@section('descripcion', 'Página de Inicio')
@section('contenido')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="cedula" type="text" placeholder="Digite su cédula"/>
                                            <label for="cedula">Cédula</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" placeholder="Digite su contraseña"/>
                                            <label for="password">Contraseña</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value=""/>
                                            <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="{{route('resetPassword')}}">¿Olvidaste tu contraseña?</a>
                                            {{-- <button type="submit" class="btn btn-primary">Iniciar Sesión</button> --}}
                                            <a class="btn btn-primary" href="{{route('dashboard')}}">Iniciar Sesión</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{route('register')}}">¿No tienes cuenta? ¡Registrate!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @component('index.footer')
        @endcomponent
    </div>
@endsection
