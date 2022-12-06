<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Store extends Model
{
    use HasFactory;

    public function addStore($vendorId, Request $request){
        $store = new Store();
        $store->vendor_id = $vendorId;
        $store->store_name = $request->storeName;
        $store->address = $request->storeName ?? '';
        $store->email = $request->email ?? '';
        $store->mobile_no = $request->mobileNo ?? '' ;
        $store->slug = Str::slug($request->storeName).'-'.Str::random(5);
        $store->save();
        return $store;
    }

    public static function getVendorStore($vendorId){
        return Store::where('vendor_id', $vendorId)->first();
    }

    public function getActiveStores(){
        return Store::where('status', 1)->orderBy('store_name', 'ASC')->get();
    }
    public function getStoreBySlug($slug){
        return Store::where('slug', $slug)->first();
    }
}
