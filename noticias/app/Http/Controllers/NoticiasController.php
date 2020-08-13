<?php

namespace App\Http\Controllers ;
use DB ;
use Illuminate\Http\Request ;
use App\Http\Requests ;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Controller as BaseController;


class NoticiasController extends BaseController
{
    public function processForm(Request $request)
    {
        $titulo  = $request->input('titulo');

        $data = DB::table('noticia')
                  ->where('title', 'LIKE', '%' . $titulo . '%')
                  ->paginate(10);

        return view('pages.busqueda',
        ['data' => $data]);
    }
}