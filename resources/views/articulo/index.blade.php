@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
	<br>
		<table id="tabla" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Operación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $articulo)
            <tr>
				<td>{{$articulo->id}}</td>
				<td>{{$articulo->nombre}}</td>
				<td>{{$articulo->descripcion}}</td>
				<td>
					{!!link_to_route('articulo.edit', $title = 'Editar', $parameters = $articulo, $attributes = ['class'=>'btn btn-primary'])!!}

					{!!link_to_route('articulo.delete', $title = 'Eliminar', $parameters = $articulo->id, $attributes = ['class'=>'btn btn-danger', 'onclick'=>'return confirm("Esta seguro que quiere eliminar este articulo?")'])!!}

				</td>
			</tr>
			@endforeach
        </tbody>
    </table>
	@endsection
	
	@section('scripts')
	<script>
		$(document).ready(function() {
    		$('#tabla').DataTable();
		});
	</script>	
	@endsection