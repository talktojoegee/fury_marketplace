<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasFactory;


    public function getBrandCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function createBrand(Request $request){
        $brand = new Brand();
        $brand->name = $request->brandName ?? '';
        $brand->slug = Str::slug($request->brandName).'-'.Str::random(5) ?? '';
        $brand->logo = $this->uploadBrandPicture($request->brandLogo);
        $brand->category_id = $request->category ?? '' ;
        $brand->save();
    }
    public function editBrand(Request $request){
        $brand =  Brand::find($request->brandId);
        $brand->name = $request->brandName ?? '';
        $brand->slug = Str::slug($request->brandName).'-'.Str::random(5) ?? '';
        $brand->save();
    }

    public function getBrands(){
        return Brand::orderBy('name', 'ASC')->get();
    }

    public function getBrandById($id){
        return Brand::find($id);
    }

    public function getBrandBySlug($slug){
        return Brand::where('slug', $slug)->first();
    }

    public function uploadBrandPicture($avatarHandler){
        return $avatarHandler->store('brand', 'public');
    }
}
