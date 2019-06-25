@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agrega Detalle de inventario para el producto</div>
                    <div class="panel-body">
                        <form  action="{{url('store/insert_detailproduct', $product['id'])}}" method="POST" class="contact-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namestore">Nombre Producto</label>
                                <input type="text" value="{{$product['name']}}" name="name" class="form-control" id="namestore" placeholder="Nombre Producto" disabled>
                            </div>
                            <div class="form-group">
                                <label for="lote">Lote</label>
                                <input type="text" name="lote" class="form-control" id="lote" placeholder="expample 09-33" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Cantidad</label>
                                <input type="number" name="quantity" class="form-control" value="{{$product['description']}}" id="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="expiration_date">Fecha Vencimiento</label>
                                <input type="date"  name="expiration_date" class="form-control" id="expiration_date" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar Detalle</button>
                        </form>
                        <br>
                        <a href="{{url('home')}}"> <button type="submit" class="btn btn-danger">Salir</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
