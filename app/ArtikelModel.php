<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class ArtikelModel extends Model
{
    public static function get_all_artikel(){
    	$artikel = DB::table('artikel')->get();
    	return $artikel;
    }

    public static function save_artikel($data){
    	$data['created_at'] = Carbon::now();
    	$data['updated_at'] = Carbon::now();
    	$slug = strtolower(str_replace(' ', '-', $data['judul']));
    	$data['slug'] = $slug;
    	$data['user_id'] = 1;
    	// dd($data);
    	$new_artikel = DB::table('artikel')->insert($data);
    	return $new_artikel;
    }

    public static function get_artikel_by_id($id){
    	$artikel = DB::table('artikel')->where('id',$id)->get();
    	return $artikel;
    }

    public static function update_artikel($id, $request){
    	// dd($request);
    	$slug = strtolower(str_replace(' ', '-', $request['judul']));
    	$request['slug'] = $slug;
    	
    	$artikel = DB::table('artikel')
    					->where('id', $id)
    					->update([
    						'judul' => $request['judul'],
    						'isi' => $request['isi'],
    						'tag' => $request['tag'],
    						'slug' => $request['slug'],
    						'user_id' => $id,
    						'updated_at' => Carbon::now()
    					]);
    	return $artikel;
    }

    public static function delete_artikel($id){
    	$artikel = DB::table('artikel')
    					->where('id', $id)
    					->delete();
    	return $artikel;
    }

    
}
