<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(){
        $this->product = new Product();
        $this->productgallery = new ProductGallery();
        $this->productcategory = new ProductCategory();
        $this->category = new Category();
    }

    public function showProducts(){
        return view('vendor.products');
    }
    public function showAddProductForm(){
        return view('vendor.add-product',[
            'categories'=>$this->category->getCategories()
        ]);
    }
}
