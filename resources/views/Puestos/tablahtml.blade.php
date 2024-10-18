<ul>

</ul>
@isset($mensaje)
    <p>{{$mensaje}}</p>
@endisset

<a href="{{route('Puestos.create')}}" class="btn btn-dark mb-3" role="button">
    <i class="fas fa-plus"></i> Insertar
</a>
<div class="table-md">
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">EDITAR</th>
                <th scope="col">ELIMINAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead> 
        <tbody>
            @foreach ($puestos as $puesto)
            <tr>
                <td scope="row">{{ $puesto->id }}</td>
                <td>{{ $puesto->idPuesto }}</td>
                <td>{{ $puesto->nombrePuesto }}</td>
                <td>{{ $puesto->tipo }}</td>
                <td>
                    <a href="{{route('Puestos.edit',$puesto->id)}}" class="btn btn-success">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                </td>
                <td>
                    <a href="{{route('Puestos.show',$puesto->id)}}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Eliminar
                    </a>
                </td>
                <td>
                    <a href="{{route('Puestos.show',$puesto->id)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i> Ver
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $puestos->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
</div>