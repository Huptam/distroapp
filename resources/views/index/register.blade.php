@extends('layout.base')
@section('titulo', 'Registrarse')
@section('descripcion', 'Crear cuenta')
@section('contenido')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Crear Cuenta</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="cedula" type="text"
                                                        placeholder="Digite su cédula" required />
                                                    <label for="cedula">Cédula</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="nombre" type="text"
                                                        placeholder="Digite su nombre" />
                                                    <label for="nombre">Nombre</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="correo" type="email"
                                                placeholder="Digite su correo electronico" />
                                            <label for="correo">Correo Electrónico</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="direccion" type="text"
                                                placeholder="Digite su dirección" />
                                            <label for="correo">Dirección</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="telefono" type="tel"
                                                        placeholder="Coloca una contraseña" />
                                                    <label for="telefono">Teléfono</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" type="password"
                                                        placeholder="Coloque una contraseña" />
                                                    <label for="password">Contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary btn-block">Crear
                                                    Cuenta</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('index') }}">¿Ya tienes una cuenta? Ir a
                                            Inicio</a></div>
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
