<!-- Id Proveedor Field -->
<div class="col-sm-12">
    {!! Form::label('id_proveedor', 'Id Proveedor:') !!}
    <p>{{ $inventario->proveedor->nombre }}</p>
</div>

<!-- Id Producto Field -->
<div class="col-sm-12">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $inventario->producto->nombre }}</p>
</div>

<!-- Stock Field -->
<div class="col-sm-12">
    {!! Form::label('stock', 'Stock:') !!}
    <p>{{ $inventario->stock }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inventario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inventario->updated_at }}</p>
</div>

