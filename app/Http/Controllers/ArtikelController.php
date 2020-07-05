<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ArtikelController extends Controller
{
    public function index()
    {
        $dataartikel = ArtikelModel::get_all_artikel();
        // dd($dataartikel);
        return view('artikel', compact('dataartikel'));
        // return view('artikel');
    }

    public function create()
    {
        // dd($dataartikel);
        return view('artikelcreate');
        // return view('artikel');
    }

    public function store(Request $request){
    	$data = $request->all();
    	// dd($data);
    	unset($data["_token"]);
    	$artikel = ArtikelModel::save_artikel($data);
        return redirect('/artikel');
    }

    public function edit($id)
    {
        $dataartikel = ArtikelModel::get_artikel_by_id($id);
        return view('artikeledit', compact('dataartikel'));
    }

    public function detail($id)
    {
        $dataartikel = ArtikelModel::get_artikel_by_id($id);
        $row_jawaban = $id;
        // dd($dataartikel);
        return view('artikeldetail', compact('dataartikel','row_jawaban'));
    }


    public function update($id, Request $request)
    {
        $artikel = ArtikelModel::update_artikel( $id, $request->all() );
        return redirect('/artikel');
    }

    public function delete($id)
    {
        $artikel = ArtikelModel::delete_artikel( $id );
        return redirect('/artikel');
    }
}
