<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    public function createCategory(Request $request){
        $cat = new Category();
        $cat->name = $request->categoryName ?? '';
        $cat->slug = Str::slug($request->categoryName).'-'.Str::random(5) ?? '';
        $cat->image = $this->uploadCategoryPicture($request->featuredImage);
        $cat->save();
    }
    public function editCategory(Request $request){
        $cat =  Category::find($request->categoryId);
        $cat->name = $request->categoryName ?? '';
        $cat->slug = Str::slug($request->categoryName).'-'.Str::random(5) ?? '';
        $cat->save();
    }


    public function getCategoryById($id){
        return Category::find($id);
    }

    public function getCategoryBySlug($slug){
        return Category::where('slug', $slug)->first();
    }


    public function getCategories(){
        return Category::orderBy('name', 'ASC')->get();
    }

    public function uploadCategoryPicture($avatarHandler){
        return $avatarHandler->store('category', 'public');
    }

   /* public function deleteFile($file){
        if(\File::exists(public_path('storage/'.$file))){
            \File::delete(public_path('storage/'.$file));
        }
    }*/
}
