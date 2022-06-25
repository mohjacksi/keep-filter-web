<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\GetCodeRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function getCode(GetCodeRequest $r)
    {

        $user = User::where('name', $r->username)->where('phone', $r->phone)->first();
        if (!$user) {
            return response()->json(['username' => $r->username, 'phone' => $r->phone, 'status' => 'isn\'t exists']);
        } else {
            $code = rand(5000, 999999);
            User::where('name', $r->username)->where('phone', $r->phone)->update(['code' => $code]);
            return response()->json(['username' => $r->username, 'phone' => $r->phone, 'code' => User::where('name', $r->username)->where('phone', $r->phone)->first()->code, 'status' => 200]);
        }
    }

    public function loginByCode(LoginRequest $r)
    {
        if ($r->phone && $r->username && $r->code) {
            $user = User::where('name', $r->username)->where('phone', $r->phone)->where('code', $r->code)->first();
            if (!$user) {
                return response()->json(['username' => $r->username, 'phone' => $r->phone, 'status' => 'isn\'t exists']);
            } else {
                \Auth::login($user);
                if (auth()->user()) {
                    $user = auth()->user();
                    $user->api_token = \Str::random(60); // clear api token
                    $user->save();
                    return response()->json(['username' => $r->username, 'phone' => $r->phone, 'token' => $user->api_token], 200);
                }
            }
        }
    }
}
