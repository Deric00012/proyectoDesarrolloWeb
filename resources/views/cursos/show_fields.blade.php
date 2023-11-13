<!-- Curso Field -->
<div class="col-sm-12">
    {!! Form::label('curso', 'Curso:') !!}
    <p>{{ $curso->curso }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $curso->estado }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $curso->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $curso->updated_at }}</p>
</div>

