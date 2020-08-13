@extends('layouts.default')
@section('content')
   <div class="row">
    	{{-- <h3>Hola</h3> --}}
    	@foreach($info as $key => $val)
        	<div class="row">
            	<div class="col-md-12 col-xs-12">
            		<h2>
                  		{{$val->title}}
					</h2>
					<p class="mt-4">
						Fecha: {{$val->created_at}}
					</p>
					<br>
					<p class="mt-4">
						Resumen:
					</p>
					<h4 class="mt-2">
						{{$val->summary}}
					</h4>
					<p class="mt-4">
						Contenido:
					</p>
               		<p class="mt-2">
                  		{{$val->content}}
					</p>

            	</div>
         	</div>
      	@endforeach
   </div>
@stop