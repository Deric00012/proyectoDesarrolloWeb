<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="productos-table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Is Active</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>Q {{ $producto->precio }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->is_active }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['productos.destroy', $producto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('productos.show', [$producto->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('productos.edit', [$producto->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
        </div>
    </div>
</div>
