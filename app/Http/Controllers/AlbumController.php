<?php

namespace App\Http\Controllers;
use App\Album;
use Auth;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
    	$album=Album::with('Photos')->get();
    	return view('albums.index')->with('albums',$album);
    }
    public function create(){
        if (!Auth::check()){
            return redirect('/albums')->with('success','Must login first!');
        }
    	return view('albums.create');

    }
    public function store(Request $request){
    	$this->validate($request,[
    		'name'=>'required',
    		'cover_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
    	$filenameWithExt=$request->file('cover_image')->getClientOriginalName();
    	$filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

    	$extention=$request->file('cover_image')->getClientOriginalExtension();;
    	$filenameToStore=$filename.'_'.time().'.'.$extention;
    	$path=$request->file('cover_image')->storeAs('public/album_covers',$filenameToStore);


    	$album=new Album;
    	$album->name=$request->input('name');
    	$album->description=$request->input('description');
    	$album->cover_image=$filenameToStore;
    	if($album->save()){
    		return redirect('/albums')->with('success','Album created');
    	}
    
    }
    public function show($id){
  			$albums=Album::with('Photos')->find($id);
  			return view('albums.show')->with('album',$albums);
  		} 
}
