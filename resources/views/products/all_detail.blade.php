@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Detalle de Producto</b></div>
                    <div class="panel-body">
                        <br>
                        <div class="row">
                            <div class=" col-sm-4">
                                <img style="width: 100%" src="{{$product['image']}}" alt="">
                            </div>
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        <b>{{$product['name']}}</b>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product['description']}}</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4 text-right"><b>Cantidad Total</b></div>
                                            <div class="col-md-2 text-left">{{$product['quantity_total']}}</div>
                                            <div class="col-md-1 text-left"><b>Precio</b></div>
                                            <div class="col-md-2 text-right">{{$product['price']}}</div>
                                            <div class="col-md-1 text-left"><b>Lotes</b></div>
                                            <div class="col-md-2 text-right">{{count($product['products_detail'])}}</div>
                                        </div>
                                        <br>
                                        <a href="{{url('store/product', $product['id'])}}">
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </a>
                                        <a href="{{url('store/product_detail', $product['id'])}}">
                                            <button type="submit" class="btn btn-primary">Agregar Lote</button>
                                        </a>
                                        @if(count($product['products_detail']) <= 0)
                                            <a href="{{url('store/delete_product', $product['id'])}}">
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">

                                @foreach($product['products_detail'] as $detail)
                                    <hr>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2 "><b>Cantidad</b></div>
                                                <div class="col-md-2 ">{{$detail['quantity']}}</div>
                                                <div class="col-md-2 "><b>Lote</b></div>
                                                <div class="col-md-2 ">{{$detail['lote']}}</div>
                                                <div class="col-md-2 "><b>Fecha de Expiracion</b></div>
                                                <div class="col-md-2 ">{{$detail['expiration_date']}}</div>

                                                <div class="col-md-4" style="margin: 20px 0px">
                                                    <a href="{{url('store/delete_lote', $detail['id'])}}">
                                                        <button type="submit" class="btn btn-danger">Eliminar Lote</button>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
