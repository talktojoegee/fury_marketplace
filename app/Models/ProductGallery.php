<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductGallery extends Model
{
    use HasFactory;

    public function uploadProductGalleryImages(Request $request, $productId){

        #Property Gallery
        if($request->hasFile('gallery'))
        {
            foreach($request->file('gallery') as $file)
            {
                $gallery = new ProductGallery();
                $gallery->attachment = $file->store('cms', 'public'); //cms for products
                $gallery->product_id = $productId;
                $gallery->save();
            }
        }
    }
}
