<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Agregar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Producto</li>
        </ol>
        <div class="row">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="nombre" type="text"
                                        placeholder="Digite el nombre del producto" required/>
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="distribuidor" type="text"
                                        placeholder="Digite el nombre del distribuidor" required />
                                    <label for="distribuidor">Distribuidor</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="ciudad" type="text"
                                        placeholder="Digite la ciudad de origen" />
                                    <label for="ciudad">Ciudad</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="cantidad" type="number"
                                        placeholder="Digite la cantidad" required />
                                    <label for="cantidad">Cantidad</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="fechaVencimiento" type="date"
                                        placeholder="Digite la fecha de vencimiento" />
                                    <label for="fechaVencimiento">Fecha de Vencimiento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="precio" type="number"
                                        placeholder="Digite el precio del producto" />
                                    <label for="precio">Precio</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-block">Añadir Producto</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
