@extends('layouts.admin')
@section('content')
@include('alerts.request')
	{!!Form::model($articulo,['route'=>['articulo.update',$articulo],'method'=>'PUT'])!!}
		@include('articulo.forms.art')
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection