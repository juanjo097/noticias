<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3">Noticias</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group mb-3">
                <form action="/busqueda" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control"
                               name="titulo"
                               placeholder="Buscar noticia"
                               required>
                        {{-- <input type="hidden" value="{{$project->id}}" name="id"> --}}
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>