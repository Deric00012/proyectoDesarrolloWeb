<!-- Id Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
    <select class='form-control custom-select' name="id_proveedor" id="id_proveedor">
        @foreach ($proveedores as $proveedor)
        <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
        @endforeach
    </select>
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <select class='form-control custom-select' name="id_producto" id="id_producto">
        @foreach ($productos as $producto)
        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
        @endforeach
    </select>
</div>

<!-- Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control', 'required']) !!}
</div>