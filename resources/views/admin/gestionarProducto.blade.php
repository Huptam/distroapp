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
        <h1 class="mt-4">Gestionar</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Productos</li>
        </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabla de Productos
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
                                        <a href="{{url('/editarProducto/'.$product->id)}}" title="Editar" class="btn btn-primary">
                                        <i class="fas fa-edit" title="Editar"></i></a>
                                        <form method="POST" action="{{ url('/eliminarProducto' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-delete" title="Eliminar" onclick="return confirm(&quot; ¿Realmente desea eliminar este producto? &quot;)"><i class="fas fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
