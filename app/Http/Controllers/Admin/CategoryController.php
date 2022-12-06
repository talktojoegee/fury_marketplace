<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GenOneCategory;
use App\Models\GenTwoCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        $this->category = new Category();
        $this->genonecategory = new GenOneCategory();
        $this->gentwocategory = new GenTwoCategory();
    }

    public function index(){
        return view('admin.settings.category.index',[
            'categories'=>$this->category->getCategories()
        ]);
    }

    public function storeCategory(Request $request){
        $this->validate($request,[
            "categoryName"=>"required|unique:categories,name",
            "featuredImage"=>"required",
        ],[
            "categoryName.required"=>"Enter category name",
            "categoryName.unique"=>"The name you entered is already taken. Enter a different one.",
            "featuredImage.required"=>"Choose an image to upload",
        ]);
        $this->category->createCategory($request);
        session()->flash("success", "New category name published!");
        return back();
    }
}
