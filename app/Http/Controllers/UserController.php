<?php


namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Monolog\Handler\IFTTTHandler;

class UserController extends Controller

{
    public function index(){
        
        if (auth()->check()) {

            return to_route('companies.services.index');

           }

           return to_route('login');
        
    }



    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function postLogin(Request $request){

        
         $request->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);

        // $user = User::where('email', $request->email)
         //           ->where('password',$request->password)
          //          ->first();
       // if($user != null){
       //         auth()->login($user);
       //   }
                    
         if(auth()->attempt(['email'=> $request->email,'password' => $request->password ])){
            return to_route('companies.index');
         }

        return to_route('login')->with('message','infos are wrong');
       
    }
    
    public function postRegister(Request $request) {

        $request ->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
            ]);

            $data = $request->all();
            $user = $this->create($data);

            auth()->login($user);
            return to_route("companies.create");
    }

    public function create(array $data){

     return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email'     => $data['email'],
        'password' => hash::make($data['password']),        
     ]);

    }

    public function logoutUser(){

        auth()->logout();
        return to_route('login');
    }


   
}


