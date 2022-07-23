@extends('layout.base')
@section('titulo', 'Recuperar Contraseña')
@section('descripcion', 'Olvidaste tu contraseña')
@section('contenido')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Recuperar Contraseña</h3>
                                </div>
                                <div class="card-body">
                                    <div class="small mb-3 text-muted">Digita tu correo electronico y te enviaremos un enlace
                                        para poder
                                        recuperar tu contraseña.
                                    </div>
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email"
                                                placeholder="Digite su correo electronico" />
                                            <label for="inputEmail">Correo Electrónico</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="{{route('index')}}">Volver a Inicio</a>
                                            <button type="submit" class="btn btn-primary">Recuperar Contraseña</button>
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
