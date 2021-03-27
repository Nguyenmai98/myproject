<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use App\Traits\StorageImageTrait;
use DB;
use Log;
use App\Traits\DeleteModelTrait;

class SliderController extends Controller
{
    use DeleteModelTrait;
	use StorageImageTrait;
	public function __construct(Slider $slider){
		$this->slider = $slider;
	}
	public function index(){
		$sliders = $this->slider->paginate(25);
		return view('admin.slider.index', compact('sliders'));
	}

	public function create(){
		return view('admin.slider.add');
	}

    public function store(Request $request){
    		$dataSliderCreate = [
	    		'name' => $request->name,
		    	];
		    	$dataUploadImage = $this->storageTraitUpload($request, 'image_path', 'slider');
		    	if(!empty($dataUploadImage)){
		    		$dataSliderCreate['image_name'] = $dataUploadImage['file_name'];
		    		$dataSliderCreate['image_path'] = $dataUploadImage['file_path'];
		    	}
		    	$slider = $this->slider->create($dataSliderCreate);
		    	return redirect()->route('sliders.index');

    	}

    public function edit($id){
    	$slider = $this->slider->find($id);
    	return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id){
    	
    		$dataSliderUpdate = [
	    		'name' => $request->name,
		    	];
		    	$dataUploadImage = $this->storageTraitUpload($request, 'image_path', 'slider');
		    	if(!empty($dataUploadImage)){
		    		$dataSliderCreate['image_name'] = $dataUploadImage['file_name'];
		    		$dataSliderCreate['image_path'] = $dataUploadImage['file_path'];
		    	}
		    	$this->slider->find($id)->update($dataSliderUpdate);
		    	$slider = $this->slider->find($id);
		    	DB::commit();
		    	return redirect()->route('sliders.index');
    }
    public function delete($id){
    	return $this->deleteModelTrait($id, $this->slider);
    }
}
