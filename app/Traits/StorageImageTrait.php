<?php

namespace App\Traits;
use Storage;
use Illuminate\Support\Str;

trait StorageImageTrait{
	public function storageTraitUpload($request, $fieldName, $folderName){
		if($request->hasFile($fieldName)){
			$file = $request->$fieldName;
	    	$fileNameOrigin = $file->getClientOriginalName();
	    	$fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
	    	$path = $request->file($fieldName)->storeAs('public/' . $folderName . '/' .auth()->id(), $fileNameHash);
	    	$dataUploadTrait = [
	    		'file_name' => $fileNameOrigin,
	    		'file_path' => Storage::url($path)
	    	];
	    	return $dataUploadTrait;
		}		
    	return null;
	}

	public function storageTraitUploadMultiple($file, $folderName){
		
	    	$fileNameOrigin = $file->getClientOriginalName();
	    	$fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
	    	$path = $file->storeAs('public/' . $folderName . '/' .auth()->id(), $fileNameHash);
	    	$dataUploadTrait = [
	    		'file_name' => $fileNameOrigin,
	    		'file_path' => Storage::url($path)
	    	];
	    	return $dataUploadTrait;
		
	}
}