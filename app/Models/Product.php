<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    public function getProductCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function getProductBrand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function getProductVendor(){
        return $this->belongsTo(Store::class, 'vendor_id');
    }
    public function getProductGallery(){
        return $this->hasMany(ProductGallery::class, 'product_id');
    }
    public function addProduct(Request $request){
        $store = Store::getVendorStore(Auth::user()->id);
        $product = new Product();
        $product->vendor_id = $store->id ;// refers to store
        $product->added_by = Auth::user()->id;
        $product->name = $request->productName ?? '';
        $product->quantity = $request->quantity ?? '';
        $product->category_id = $request->category ?? '';
        $product->sku = $request->sku ?? '';
        $product->brand_id = $request->brand ?? '';
        $product->active_price = $request->price ?? '';
        $product->normal_price = $request->price ?? '';
        $product->tags = $request->tags ?? 'Abuja market, marketplace, Nigeria marketplace';
        $product->description = $request->productDescription ?? '';
        $product->slug = Str::slug($request->productName).'-'.Str::random(8);
        $product->save();
        return $product;
    }

    public function getAllProducts(){
        return Product::orderBy('id', 'DESC')->get();
    }
    public function getAllVendorProducts($vendorId){
        return Product::where('vendor_id', $vendorId)->orderBy('id', 'DESC')->get();
    }
    public function getProductBySlug($slug){
        return Product::where('slug', $slug)->first();
    }

    public function getFeaturedProductImage($productId){
        return ProductGallery::where('product_id', $productId)->first();
    }
}
