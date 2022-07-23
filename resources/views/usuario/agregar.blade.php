<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registrar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">@yield('tipoUsuario')</li>
        </ol>
        <div class="row">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
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
            </div>
        </div>
    </div>
</main>
