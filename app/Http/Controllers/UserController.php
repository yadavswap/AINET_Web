<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request,$id) {
        $email = $request->input('email');
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $password = Hash::make($request->password);
        // $request->input('password')->bcrypt;

        // $email = $request->input('email');
        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
        //DB::table('student')->update($data);
        // DB::table('student')->whereIn('id', $id)->update($request->all());
        DB::update('update users set name = ?,email=?,mobile=?,password=?  where id = ?',[$name,$email,$mobile,$password,$id]);
        return redirect('home');
        // echo 'Click Here to go back.';
        }
}

