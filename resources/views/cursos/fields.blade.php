<!-- Curso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curso', 'Curso:') !!}
    {!! Form::text('curso', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::number('estado', null, ['class' => 'form-control', 'required']) !!}
</div>