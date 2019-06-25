@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tiendas</div>
                    <div class="panel-body">
                        <div class="text-center">

                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">
                            @if(!count($stores)> 0)
                                <strong>No tienes una tienda registrada</strong>
                            @endif
                            <p><a href="{{url('home/stores')}}"><i><b>Registra Una tienda</b></i></a></p>
                        </div>
                        <div class="row">
                            @if(count($stores)> 0)
                                @foreach($stores as $data)
                                    <div class="col-md-4" >
                                        <div class="card">
                                            <a style="color: black" href="{{url('home/store',$data['id'])}}">
                                                <img class="card-img-top" style="width: 100%" src="{{$data['logo']}}" alt="Card image cap">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title"><b><i>{{$data['name']}}</i></b></h4>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12"><b>Nit:</b></div>
                                                    <div class="col-md-8 col-sm-12">{{$data['nit']}}</div>
                                                    <div class="col-md-4 col-sm-12"><b>Direccion:</b></div>
                                                    <div class="col-md-8 col-sm-12">{{$data['address']}}</div>
                                                    <div class="col-md-4 col-sm-12"><b>Telefono:</b></div>
                                                    <div class="col-md-8 col-sm-12">{{$data['phone']}}</div>
                                                    <div class="col-md-4 col-sm-12"><b>Productos:</b></div>
                                                    <div class="col-md-8 col-sm-12">{{count($data['products'])}}</div>
                                                    @if(count($data['products']) <= 0)
                                                        <div class="col-md-12 col-sm-12">
                                                            <br>
                                                            <a href="{{url('home/delete_store', $data['id'])}}">
                                                                <button style="width: 100%" type="submit" class="btn btn-danger">Eliminar</button>
                                                            </a>
                                                        </div>
                                                    @else
                                                        <div class="col-md-12 col-sm-12">
                                                            <br>
                                                            <a style="color: black" href="{{url('home/store',$data['id'])}}">
                                                                <button style="width: 100%" type="submit" class="btn btn-primary">Ver</button>
                                                            </a>
                                                        </div>
                                                    @endif

                                                </div>
                                            </div>

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
