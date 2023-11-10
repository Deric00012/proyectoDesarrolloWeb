<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <select class='form-control custom-select' name="id_producto" id="id_producto">
        @foreach ($productos as $producto)
        <option value="{{$producto->id}}" data-precio="{{$producto->precio}}" @if(isset($venta) && $producto->id == $venta->id_producto)
            selected
            @endif>
            {{$producto->nombre}}: Q{{$producto->precio}}
        </option>
        @endforeach
    </select>
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-6">
    <label>Total a pagaer</label>
    <div id="resultado"><input id="total" name="total" class="form-control" disabled></div>
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

<script>
    $(document).ready(function() {
        $("#cantidad").on("keyup", function() {
            var valorInput = $(this).val();
            var selectElement = document.getElementById("id_producto"); 
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var precio = selectedOption.dataset.precio;
            
            var total = valorInput * precio;
            $("#total").val(total);
        }); 
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
