<?php

namespace App\Http\Controllers;
use App\Album;
use App\Photo;
use App\User;
use Auth;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index(){
    	$album=Album::paginate(6);
    	return view('albums.index')->with('albums',$album);
    }
    public function create(){
        if (!Auth::check()){
            return redirect('/albums')->with('error','Must login first!');
        }
    	return view('albums.create');

    }
    public function store(Request $request){
         if (!Auth::check()){
            return  redirect()->route('login')->with('error','Must login first!');
        }
        else{
    	$this->validate($request,[
    		'name'=>'required',
    		'cover_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
        $users=Auth::user();
    	$filenameWithExt=$request->file('cover_image')->getClientOriginalName();
    	$filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

    	$extention=$request->file('cover_image')->getClientOriginalExtension();;
    	$filenameToStore=$filename.'_'.time().'.'.$extention;
    	$path=$request->file('cover_image')->storeAs('public/album_covers/',$filenameToStore);


    	$album=new Album;
        $user=new User;
    	$album->name=$request->input('name');
    	$album->description=$request->input('description');
    	$album->cover_image=$filenameToStore;
        $album->created_by=Auth::user()->id;
    	if($album->save()){
    		return redirect('/albums/usercreate/create/'.$album->id)->with('success','Album created Successfully!   Now Please Upload Photo');
    	}
        }
    }

    public function show($id){
         if (!Auth::check()){
            return  redirect()->route('login');
        }
        else{
  			$albums=Album::with('Photos')->find($id);
  			return view('albums.show')->with('album',$albums);
  		} 
    }
        public function usercreate($created_by){
            if (!Auth::check()){
            return  redirect()->route('login')->with('success','Must login first!');
        }
        else{
           $userid=Auth::user()->id;

            
                        $albums=Album::with('Photos')->find($created_by);
                        return view('albums.usercreate')->with('album',$albums);
        }
}
}