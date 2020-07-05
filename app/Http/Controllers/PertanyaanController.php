<?php

namespace App\Http\Controllers;
// use DB;
use Illuminate\Http\Request;
use App\JawabanModel;
use App\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
    	$row_pertanyaan = PertanyaanModel::get_all_pertanyaan();
    	// dd($row_pertanyaan);
    	return view('pertanyaan', compact('row_pertanyaan'));
    	
    }

    public function create()
    {
    	return view('pertanyaancreate');
    }

    public function edit($id)
    {
        $datapertanyaan = PertanyaanModel::get_pertanyaan_by_id($id);
        return view('pertanyaanedit', compact('datapertanyaan'));
    }
    
    public function store(Request $request){
    	$data = $request->all();
    	unset($data["_token"]);
    	$dtpertanyaan = PertanyaanModel::save_pertanyaan($data);
        return redirect('/pertanyaan');
    }
    
    public function detail($id)
    {
        $datajawaban = JawabanModel::get_all_jawaban($id);
        $datapertanyaan = PertanyaanModel::get_pertanyaan_by_id($id);
        $row_jawaban = $id;
        // dd($row_jawaban);
        return view('pertanyaandetail', compact('datapertanyaan','datajawaban','row_jawaban'));
    }


    public function update($id, Request $request)
    {
        $pertanyaan = PertanyaanModel::update_pertanyaan( $id, $request->all() );
        return redirect('/pertanyaan');
    }

    public function delete($id)
    {
        $pertanyaan = PertanyaanModel::delete_pertanyaan( $id );
        return redirect('/pertanyaan');
    }
}
