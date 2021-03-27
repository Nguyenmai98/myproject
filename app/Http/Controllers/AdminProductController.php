<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Traits\StorageImageTrait;
use DB;
use Log;
use App\Traits\DeleteModelTrait;

class AdminProductController extends Controller
{
	use DeleteModelTrait;
	use StorageImageTrait;
	private $category;
	private $product;
	public function __construct(Category $category, Product $product){
		$this->category = $category;
		$this->product = $product;
	}
	public function index(){
		$products = $this->product->paginate(25);
		return view('admin.product.index', compact('products'));
	}

	public function create(){
		$htmlOption = $this->getCategory($parentId = '');
		return view('admin.product.add', compact('htmlOption'));
	}

	public function getCategory($parentId){
    	$data = $this->category->all();
    	$recusive = new Recusive($data);
    	$htmlOption = $recusive->categoryRecusive($parentId);
    	return $htmlOption;
    }

    public function store(Request $request){
    		$dataProductCreate = [
	    		'name' => $request->name,
	    		'daodien' => $request->daodien,
	    		'dienvien' => $request->dienvien,
	    		'theloai' => $request->theloai,
	    		'khoichieu' => $request->khoichieu,
	    		'thoiluong' => $request->thoiluong,
	    		'ngonngu' => $request->dienvien,
	    		'rated' => $request->rated,
	    		'chitiet' => $request->chitiet,
	    		'url' => $request->url,
	    		'user_id' => auth()->id(),
	    		'category_id' => $request->category_id
		    	];
		    	$dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');
		    	if(!empty($dataUploadFeatureImage)){
		    		$dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
		    		$dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
		    	}
		    	$product = $this->product->create($dataProductCreate);
		    	return redirect()->route('products.index');

    	}

    public function edit($id){
    	$product = $this->product->find($id);
    	$htmlOption = $this->getCategory($product->category_id);
    	return view('admin.product.edit', compact('htmlOption', 'product'));
    }

    public function update(Request $request, $id){
    	
    		$dataProductUpdate = [
	    		'name' => $request->name,
	    		'daodien' => $request->daodien,
	    		'dienvien' => $request->dienvien,
	    		'theloai' => $request->theloai,
	    		'khoichieu' => $request->khoichieu,
	    		'thoiluong' => $request->thoiluong,
	    		'ngonngu' => $request->dienvien,
	    		'rated' => $request->rated,
	    		'chitiet' => $request->chitiet,
	    		'url' => $request->url,
	    		'user_id' => auth()->id(),
	    		'category_id' => $request->category_id
		    	];
		    	$dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');
		    	if(!empty($dataUploadFeatureImage)){
		    		$dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
		    		$dataProductUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
		    	}
		    	$this->product->find($id)->update($dataProductUpdate);
		    	$product = $this->product->find($id);
		    	DB::commit();
		    	return redirect()->route('products.index');
    }
    public function delete($id){
    	return $this->deleteModelTrait($id, $this->product);
    }
    
}
