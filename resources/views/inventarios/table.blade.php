<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="inventarios-table">
            <thead>
            <tr>
                <th>Id Proveedor</th>
                <th>Id Producto</th>
                <th>Precio</th>
                <th>Stock</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventarios as $inventario)
                <tr>
                    <td>{{ $inventario->proveedor->nombre }}</td>
                    <td>{{ $inventario->producto->nombre }}</td>
                    <td>Q {{ $inventario->producto->precio}}</td>
                    <td>{{ $inventario->stock }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['inventarios.destroy', $inventario->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('inventarios.show', [$inventario->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('inventarios.edit', [$inventario->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $inventarios])
        </div>
    </div>
</div>
