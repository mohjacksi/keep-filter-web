<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereRoleIs('user')->get();
        //dd($users);
        return view('dashboard.users.IndexUser',compact('users'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $users = User::whereRoleIs('admin')->get();
        //dd($users);
        return view('dashboard.users.IndexAdmin',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($requist->all());
        $user = new User;
        
        if($request->type == 'admin'){
            $user->name     = $request->name;
            $user->phone    = $request->phone;
            $user->location = $request->location;
            $user->code     = mt_rand(100, 999) . mt_rand(100, 999);
            $user->email    = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $user->attachRole('admin');
            $user->attachRole('user');
        
        } elseif($request->type == 'user'){
            $user->name     = $request->name;
            $user->phone    = $request->phone;
            $user->location = $request->location;
            $user->code     = mt_rand(100, 999) . mt_rand(100, 999);
            $user->save();
            $user->attachRole('user');   
        }

        return back()->with(['insert'=>'done']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {

        //dd($request->all());
         //validate role
         $roels = [
            'name'        => 'required|unique:users,name,'.$user->id,
            'phone'       => 'required|unique:users,phone,'.$user->id,
            'location'    => 'required',
            'email'       => 'unique:users,email,'.$user->id,
        ];

        //messages
        $messages = [
            'name.required'=> 'هذا الحقل مطلوب',
            'phone.required'=> 'هذا الحقل مطلوب',
            'location.required'=> 'هذا الحقل مطلوب',
            'email.unique' => 'البريد الالكتروني هذا مستخدم من قبل جرب بريد اخر',
            'phone.unique' => 'رقم الهاتف هذا مستخدم من قبل مستخدم اخر',
        ];

        // validate 
        $validate = validator::make($request->all() , $roels , $messages );

        // validate errors 
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput($request->all());
        }


        if($request->type == 'admin'){
            $user->name     = $request->name;
            $user->phone    = $request->phone;
            $user->location = $request->location;
            $user->code     = mt_rand(100, 999) . mt_rand(100, 999);
            $user->email    = $request->email;
            if($request->password){
                $user->password = Hash::make($request->password);
            }
            $user->save();
        
        } 
        if($request->type == 'user'){
            $user->name     = $request->name;
            $user->phone    = $request->phone;
            $user->location = $request->location;
            $user->code     = mt_rand(100, 999) . mt_rand(100, 999);
            $user->save();
        }

            
        return back()->with(['update'=>'done']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
