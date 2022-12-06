<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function __construct(){
        $this->user = new User();
        $this->store = new Store();
    }


    public function showHomepage(){
        return view('frontend.index');
    }

    public function showStores(){
        return view('frontend.stores',[
            'stores'=>$this->store->getActiveStores()
        ]);
    }

    public function showStoreDetails(Request $request){
        $store = $this->store->getStoreBySlug($request->slug);
        if(!empty($store)){
            return view('frontend.store-details',[
                'store'=>$store
            ]);
        }else{
            return back();
        }

    }


    public function showBecomeAVendor(){
        return view('frontend.become-a-vendor');
    }

    public function storeVendorRegistration(Request $request){
        $this->validate($request,[
            "firstName"=>"required",
            "lastName"=>"required",
            "email"=>"required|email",
            "mobileNo"=>"required",
            "storeName"=>"required",
            "password"=>"required",
        ],[
            "firstName.required"=>"Enter your first name",
            "lastName.required"=>"Enter your last name",
            "email.required"=>"Enter your email address ",
            "mobileNo.required"=>"Enter your mobile number",
            "storeName.required"=>"Enter your store name",
            "password.required"=>"Choose a secure password",
        ]);
        $vendor =  $this->user->generalCreateUser($request, 3);
        $this->store->addStore($vendor->id, $request);
        session()->flash("success", "Your account was created! Proceed to login to your account.");
        return back();
    }
}
