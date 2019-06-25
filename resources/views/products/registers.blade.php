@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de producto</div>
                    <div class="panel-body">
                        <form  action="{{url('store/insert_product')}}" method="POST" class="contact-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namestore">Nombre Producto</label>
                                <input type="text" name="name" class="form-control" id="namestore" placeholder="Nombre Producto">
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" name="price" class="form-control" id="price" placeholder="$0">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Breve descripcion">
                            </div>
                            <div class="form-group">
                                <label for="store">Tienda del producto</label>
                                <select class="form-control" name="store" id="store">
                                    @foreach($stores as $store)
                                        <option value="{{$store['id']}}">{{$store['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="charact">Caracteristica principal</label>
                                <select class="form-control" name="charact" id="charact">
                                @foreach($characts as $charact)
                                    <option value="{{$charact['id']}}">{{$charact['name']}}</option>
                                @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
