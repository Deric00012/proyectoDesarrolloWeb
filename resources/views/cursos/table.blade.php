<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="cursos-table">
            <thead>
            <tr>
                <th>Curso</th>
                <th>Estado</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->curso }}</td>
                    <td>{{ $curso->estado }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['cursos.destroy', $curso->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('cursos.show', [$curso->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('cursos.edit', [$curso->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $cursos])
        </div>
    </div>
</div>
