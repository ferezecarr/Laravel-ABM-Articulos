<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticuloRequest;
use Illuminate\Http\Request;
use App\Articulo;

use Redirect;
use Session;

class ArticuloController extends Controller{
	
    public function index(){

    	$articulos = Articulo::all();

    	return view('articulo.index', compact('articulos'));
    }

    public function create(){

    	return view('articulo.create');
    }

    public function store(ArticuloRequest $request){

    	Articulo::create($request->all());

    	Session::flash('message' , 'Articulo Creado Correctamente');

    	return Redirect::to('/articulo');
    }

    public function show($id){

    }

    public function edit($id){

    	$articulo = Articulo::find($id);

    	return view('articulo.edit' , compact('articulo'));
    }

    public function update(ArticuloRequest $request , $id){

    	$articulo = Articulo::find($id);

    	$articulo->fill($request->all());

    	$articulo->save();

    	Session::flash('message' , 'Articulo Actualizado Correctamente');

    	return Redirect::to('/articulo');
    }

    public function destroy($id){

    	$articulo = Articulo::find($id);

    	if($articulo != null){

    		$articulo->delete();

    		Session::flash('message' , 'Articulo Eliminado Correctamente');
    	}

    	return Redirect::to('/articulo');
    }


}
