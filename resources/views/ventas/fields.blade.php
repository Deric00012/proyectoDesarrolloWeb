<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <select class='form-control custom-select' name="id_producto" id="id_producto">
        @foreach ($productos as $producto)
        <option value="{{$producto->id}}" @if(isset($venta) && $producto->id == $venta->id_producto)
            selected
            @endif>
            {{$producto->nombre}}
        </option>
        @endforeach
    </select>
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#fecha').datepicker()
</script>
@endpush

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <select class='form-control custom-select' name="id_cliente" id="id_cliente">
        @foreach ($clientes as $cliente)
        <option value="{{$cliente->id}}" @if(isset($venta) && $cliente->id == $venta->id_cliente)
            selected
            @endif>
            {{$cliente->id}} {{$cliente->nombre}} {{$cliente->apellido}}
        </option>
        @endforeach
    </select>
</div>