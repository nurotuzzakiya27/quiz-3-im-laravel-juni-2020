<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class UsersModel extends Model
{
    public static function get_all_users(){
    	$users = DB::table('users')->get();
    	return $users;
    }

    public static function save_users($data){
    	$data['created_at'] = Carbon::now();
    	$data['updated_at'] = Carbon::now();
    	$new_users = DB::table('users')->insert($data);
    	return $new_users;
    }

    public static function get_users_by_id($id){
    	$users = DB::table('users')->where('id',$id)->get();
    	return $users;
    }

    public static function update_users($id, $request){
    	$users = DB::table('users')
    					->where('id', $id)
    					->update([
    						'name' => $request['name'],
    						'email' => $request['email'],
    						'updated_at' => Carbon::now()
    					]);
    	return $users;
    }

    public static function delete_users($id){
    	$users = DB::table('users')
    					->where('id', $id)
    					->delete();
    	return $users;
    }
}
