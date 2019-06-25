@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$store['name']}}</div>
                    <div class="panel-body">
                        <div class="text-center">

                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">
                            @if(!count($products)> 0)
                                <strong>No tienes Productos registrados</strong>
                            @endif
                            <p><a href="{{url('store/product')}}"><i><b>Registra un Producto</b></i></a></p>
                        </div>
                        <div class="row">
                            @if(count($products)> 0)
                                @foreach($products as $data)
                                    <div class="col-md-4" >
                                        <div class="card">
                                            <a style="color: black" href="{{url('store/all_data_product',$data['id'])}}">
                                                <img class="card-img-top" style="width: 100%" src="{{$data['image']}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title"><b><i>{{$data['name']}}</i></b></h4>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-12"><b>Cantidad:</b></div>
                                                        <div class="col-md-8 col-sm-12">{{$data['quantity_total']}} <i>Undis</i></div>
                                                        <div class="col-md-4 col-sm-12"><b>Precio:</b></div>
                                                        <div class="col-md-8 col-sm-12">{{$data['price']}}</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
