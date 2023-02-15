<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 

class AuthController extends Controller
{
    public function login()
     {
            return view('login');

        }
        public function auth(Request $request)
        {
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                if(Auth::user()->status !=  'active')
                {
                    Auth::logout();
        
                    $request->session()->invalidate();
                
                    $request->session()->regenerateToken();
                    
                    Session::Flash('status', 'failed');
                    Session::Flash('message', 'your acount is not active yet.please contact admin!');
                    return redirect('login');
                }
                $request->session()->regenerate();
                if(Auth::user()->roles_id == 1)
                
                {
                    return redirect('dashboard');
                }

                if(Auth::user()->roles_id == 2)
                {
                    return redirect('profile'); 
                }
            }
            Session::Flash('status', 'failed');
                    Session::Flash('message', 'invaid login!');
                    return redirect('login');
     }
    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('login');
        }

        public function register(){
            return view ('register');
        }

        public function regis(Request $request){
            $validated = $request->validate([
                'username' => 'required|unique:users',
                'password' => 'required|min:5',
                'phone' => 'required|max:13',
                'address' => 'required|max:255',


            ]);

           $request['password'] = Hash::make($request->password);
            $user = User::create($request->all());

            Session::Flash('status', 'success');
            Session::Flash('message', 'Regist Success! wait adminn to approve');
            return redirect('register');
        }
}


