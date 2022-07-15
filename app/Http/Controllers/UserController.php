<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->user = new User();
    }

    public function customerDashboard(){
        return 'Customer';
    }

    public function reGenerateApiToken(){
        $this->user->apiTokenGenerator();
        session()->flash("success", "New API token re-generated.");
        return back();
    }
}
