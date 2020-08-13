@extends('layouts.default')
@section('content')
<div class="row">
    @if($data->count() == 0)
        <div class="row">
            <div class="col-md-12">
                <h4 class="mt-4">
                    Sin resultados en la búsqueda
                </h4>
            </div>
        </div>
    @endif

    @foreach($data as $key => $val)
            <div class="row">
                    <div class="col-md-3 mb-3 mr-3">
                            <div class="card"
                                 style="width: 18rem;">
                                    <div class="card-body">

                                            <h5 class="card-title">
                                                {{$val->title}}
                                            </h5>

                                            <p class="card-text"> 
                                                {{$val->summary}} 
                                            </p>

                                            <a href="/noticia/{{$val->id}}" 
                                               class="btn btn-primary">
                                               Ver noticia completa
                                            </a>
                                    </div>
                            </div>
                    </div>
            </div>
    @endforeach
    {{$data->links()}}
</div>
@stop