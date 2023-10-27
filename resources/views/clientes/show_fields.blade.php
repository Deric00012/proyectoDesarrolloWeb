<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $cliente->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $cliente->apellido }}</p>
</div>

<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $cliente->fecha }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $cliente->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $cliente->telefono }}</p>
</div>

<!-- Cui Field -->
<div class="col-sm-12">
    {!! Form::label('cui', 'Cui:') !!}
    <p>{{ $cliente->cui }}</p>
</div>

<!-- Nit Field -->
<div class="col-sm-12">
    {!! Form::label('nit', 'Nit:') !!}
    <p>{{ $cliente->nit }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cliente->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cliente->updated_at }}</p>
</div>

