<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use DB;
use App\Album;

class UserProfileController extends Controller
{
    
	function index($id){
		$data['data']=DB::table('users')->find($id);
		// dd($data);
			return view('user.insertform')->with('users',$data);

	}

	function myAlbums($created_by){
		$data=DB::select('select * from albums where created_by = ?', [$created_by]);	
			return view('user.viewalbum',['albums' => $data]);

	}
 
function myPhotos($album_id){
		$albums=Album::find($album_id);
		$data=DB::select('select * from photos where album_id = ?', [$album_id]);
		 // dd($data);	
			return view('user.viewphoto',['photos' => $data])->with('album',$albums);

	}

}
 
                        