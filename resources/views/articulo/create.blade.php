@extends('layouts.admin')
@section('content')
@include('alerts.request')
{!!Form::open(['route'=>'articulo.store', 'method'=>'POST'])!!}
	@include('articulo.forms.art')
	{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection

<!-- Laravel Collective : Definir el objeto Form -->