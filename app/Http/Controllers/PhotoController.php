<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Photo;
use App\Album;
use Auth;

class PhotoController extends Controller
{
   public function create($album_id)
   {
   		return view('photos.create')->with('album_id',$album_id);
   }
   public function store(Request $request){
    	$this->validate($request,[
    		'title'=>'required',
    		'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
        $users=Auth::user();
    	$filenameWithExt=$request->file('photo')->getClientOriginalName();
    	$filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

    	$extention=$request->file('photo')->getClientOriginalExtension();;
    	$filenameToStore=$filename.'_'.time().'.'.$extention;
    	$path=$request->file('photo')->storeAs('public/photo/'.$request->input('album_id').'/',$filenameToStore);


    	$photo=new Photo;
    	$photo->album_id=$request->input('album_id');
    	$photo->title=$request->input('title');
    	$photo->description=$request->input('description');
    	$photo->size=$request->file('photo')->getClientSize();
    	$photo->photos=$filenameToStore;
    	$photo->save();

    		return redirect('/photos/'.$photo->id)->with('success','Photo Uploadedd!');
    	}
    	public function show($id){
    		$photo=Photo::find($id);
            return view('photos.show')->with('photo',$photo);;
    	}
    	public function destroy($id){
    		$photo=Photo::find($id);
    		if(Storage::delete('/storage/photo/{$photo->album_id}/{$photo->photos}')){
    			$photo->delete();
    			return redirect('/')->with('success','photo deleted');
    		}
    	}
        public function usercreate($id){
            $photo=Photo::find($id);
            return view('albums.usercreate')->with('photo',$photo);
        }

}
