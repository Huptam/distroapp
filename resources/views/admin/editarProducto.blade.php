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
            <h1 class="mt-4">Editar</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Producto</li>
            </ol>
            <div class="row">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <form action="{{url('/updateProducto/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="name" name="name" type="text"
                                            placeholder="Digite el nombre del producto" value="{{ $product->name }}" />
                                        <label for="nombre">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="description" name="description" type="text"
                                            placeholder="Digite una descripcion" value="{{ $product->description }}" />
                                        <label for="descripcion">Descripción</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="image" name="image" type="file"
                                            placeholder="Adjunte la imagen al producto"" />
                                        <label for="imagen">Adjuntar Imagen</label>
                                        <img class="product-img" src="{{ Storage::url($product->image) }}" width="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="barcode" name="barcode" type="number"
                                            placeholder="Digite el código de barra" value="{{ $product->barcode }}"
                                            min="1" />
                                        <label for="codigoBarra">Código de Barra</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="quantity" name="quantity"type="number"
                                            placeholder="Digite la fecha de vencimiento" value="{{ $product->quantity }}"
                                            min="1" />
                                        <label for="cantidad">Cantidad</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="price" name="price" type="number"
                                            placeholder="Digite el precio del producto" value="{{ $product->price }}"
                                            min="1" />
                                        <label for="precio">Precio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <label for="status">Estatus</label>
                                    <select name="status" class="form-control  id="status">
                                        <option value="1" {{ $product->status === 1 ? 'selected' : '' }}>Activo
                                        </option>
                                        <option value="0" {{ $product->status === 0 ? 'selected' : '' }}>Inactivo
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-block">Editar Producto</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </main>

@endsection
