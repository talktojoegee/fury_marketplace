<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->brand = new Brand();
    }

    public function getBrandByCategoryId(Request $request){
        $this->validate($request,[
            'catId'=>'required'
        ]);
        $brands = $this->brand->getBrandsByCategoryId($request->catId);
        return view('vendor.partial._brand-selector',[
            'brands'=>$brands
        ]);
    }
}
