<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class UploadController extends Controller
{
    public function index(){

    	$files = File::all();

    	return view('upload2')->with('files', $files);
    }

    public function store(Request $request){
    	
    	$messages = [
    		'required' => 'Please select file to upload',
		];

    	$this->validate($request, [
    		'file' => 'required',
    	], $messages);

    	foreach ($request->file as $file) {
    		$filename = time().'_'.$file->getClientOriginalName();
	    	$filesize = $file->getClientSize();
	    	$file->storeAs('public/',$filename);
	    	$fileModel = new File;
	    	$fileModel->name = $filename;
	    	$fileModel->size = $filesize;
	    	$fileModel->location = 'storage/'.$filename;
	    	$fileModel->save();    		
    	}
    		
    	return redirect('/')->with('success', 'File/s Uploaded Successfully');
    		
	}
	
	
    public function descarga(){
        $files=DB::table('files')->get();
		return view(('upload2'),compact('files'));
		
	}
	
	public function deletefiles($id)
    {
        //
		//CARGO LA CARPETAS
		$currentCarpeta = DB::table('files')->where('id',$id)->delete();
		

		
	
		return redirect()->back();

    }

}
