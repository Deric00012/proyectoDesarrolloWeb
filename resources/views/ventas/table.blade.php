<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="ventas-table">
            <thead>
            <tr>
                <th>Id Producto</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Id Cliente</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id_producto }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td>{{ $venta->fecha }}</td>
                    <td>{{ $venta->id_cliente }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['ventas.destroy', $venta->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('ventas.show', [$venta->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('ventas.edit', [$venta->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $ventas])
        </div>
    </div>
</div>
