@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agrega SubCaracteristicas al producto y editalo</div>
                    <div class="panel-body">
                        <form  action="{{url('store/insert_subcategories', $product['id'])}}" method="POST" class="contact-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namestore">Nombre Producto</label>
                                <input type="text" value="{{$product['name']}}" name="name" class="form-control" id="namestore" placeholder="Nombre Producto">
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" name="price" value="{{$product['price']}}" class="form-control" id="price" placeholder="$0">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" name="description" class="form-control" value="{{$product['description']}}" id="description" placeholder="Breve descripcion">
                            </div>
                            <div class="form-group">
                                <label for="subone">Sub Caracteristica UNO</label>
                                <select class="form-control" name="subone" id="subone">
                                    @foreach($subcharacteristics as $subcharect)
                                        <option value="{{$subcharect['id']}}">{{$subcharect['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subtwo">Sub Caracteristica DOS</label>
                                <select class="form-control" name="subtwo" id="subtwo">
                                    @foreach($subcharacteristics as $subcharect)
                                        <option value="{{$subcharect['id']}}">{{$subcharect['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subthree">Sub Caracteristica TRES</label>
                                <select class="form-control" name="subthree" id="subthree">
                                    @foreach($subcharacteristics as $subcharect)
                                        <option value="{{$subcharect['id']}}">{{$subcharect['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar SubCategorias</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
