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
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Administrador</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Información de Ventas</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Mirar detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Ventas en Alerta</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Mirar detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Ventas Completadas</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Mirar detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Ventas en Peligro</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Mirar detalles</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Gráfica tipo Area
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Gráfica tipo Barra
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabla de Datos
            </div>
            <div class="card-body">
                <table id="datatablesSimple" >
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Código de Barra</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Estatus</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Código de Barra</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Estatus</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                    <tbody>@foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>
                                    <img class="product-img" src="{{ Storage::url($product->image) }}" width="100">
                                </td>
                                <td>{{ $product->barcode }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                        {{ $product->status ? 'Activo' : 'Inactivo' }}
                                </td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <a href="" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                                    <button class="btn btn-danger btn-delete"
                                    data-url=""><i
                                        class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
    {{-- @component('admin.main')
    @endcomponent --}}
@endsection
