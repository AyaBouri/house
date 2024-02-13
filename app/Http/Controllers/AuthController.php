<?php
namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login(){
        /*User::created([
            'name'=>'John',
            'email'=>'john@doe.fr',
            'password'=>Hash::make(0000)
        ]);*/
       // return view('admin.admin');
        //return redirect()->route('home');
        //return redirect()->route('admin.admin');
        $adminUrl = 'http://127.0.0.1:8000/admin/admin'; // Replace with your actual URL
        return redirect($adminUrl);
    }
    public function doLogin(LoginRequest $request){
        $credentials=$request->validated();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('admin.property.index'));
        }
        return back()->withErrors([
            'email'=>'Identifiants incorrect'
        ])->onlyInput('email');
    }
    public function logout(){
        Auth::logout();
        return to_route('login')->with('success','Vous êtes maintenant déconnecté');
    }
}
