@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tiendas</div>
                    <div class="panel-body">
                        <form  action="{{url('home/insert_stores')}}" method="POST" class="contact-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="namestore">Nombre Tienda</label>
                                <input type="text" name="name" class="form-control" id="namestore" placeholder="Nombre Tienda">
                            </div>
                            <div class="form-group">
                                <label for="nit">NIT</label>
                                <input type="text" name="nit" class="form-control" id="nit" placeholder="Nit">
                            </div>
                            <div class="form-group">
                                <label for="address">Direccion</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Cll 5 # 5 - 5">
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="Bogota">
                            </div>
                            <div class="form-group">
                                <label for="country">Pais</label>
                                <input type="text" name="country" class="form-control" id="country" placeholder="Colombia">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefono</label>
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Colombia">
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
