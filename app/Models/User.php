<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserAccount(){ //git test
        return $this->hasMany(BulkSmsAccount::class, 'user_id')->orderBy('id', 'DESC');
    }

    public function getUserBulkSMSReport(){
        return $this->hasMany(BulkMessage::class, 'user_id')->orderBy('id', 'DESC');
    }

    public function getUserPhoneGroups(){
        return $this->hasMany(PhoneGroup::class, 'user_id');
    }

    public function getUserSenderIds(){
        return $this->hasMany(SenderId::class, 'user_id');
    }


    public function createUser(Request $request){
        $user = new User();
        $user->first_name = $request->firstName;
        $user->mobile_no = $request->phoneNumber ?? $request->mobileNo;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->uuid = Str::uuid();
        $user->api_token = Str::random(60);
        $user->save();
        return $user;
    }
    public function generalCreateUser(Request $request, $userType){
        $user = new User();
        $user->first_name = $request->firstName;
        $user->mobile_no = $request->phoneNumber ?? $request->mobileNo;
        $user->email = $request->email;
        $user->is_admin = $userType;
        $user->password = bcrypt($request->password);
        $user->uuid = Str::uuid();
        $user->api_token = Str::random(60);
        $user->save();
        return $user;
    }


    public function apiTokenGenerator(){
        $user = User::find(Auth::user()->id);
        $user->api_token = Str::random(60);
        $user->save();
    }

    public function getUserByUuid($uuid){
        return User::where('uuid', $uuid)->first();
    }
     public function getUserById($id){
        return User::find( $id);
    }

    public function updateUser(Request $request, $mobile){
        $user = User::find($request->id);
        $user->first_name = $request->firstName;
        $user->mobile_no = $request->phoneNumber;
        //$user->email = $request->email;
        //$user->password = bcrypt($request->password);
        $user->uuid = Str::uuid();
        $user->save();
        return $user;
    }
    public function getUserByEmail($email){
        return User::where('email', $email)->first();
    }

    public function getToken($token){
        return User::select('api_token')->where('api_token', $token)->first();
    }

}
