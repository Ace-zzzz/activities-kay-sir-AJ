<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CustomAuthMiddleware;
use App\Http\Requests\LoginRequest;
use App\Models\Credential;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('layout.login');
    }

    public function loginSubmit(LoginRequest $request)
    {
        dd($request->email, $request->password);
    }

    public function apiData()
    {
        $client = new Client();
        $response = $client->get('http://socialite.test/api/posts');
        $data = json_decode($response->getBody());

        return compact('data');
    }

    public function register()
    {
        return view('login.register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $password = Hash::make($request->password);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;

        DB::beginTransaction();
        try{
            $user->save();
            DB::commit();
            return back()->with('success', 'User created successfully');
        }catch(QueryException $e){
            $message = "ERROR";
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                $message = "Email already exists";
            }
            return back()->with('error', $message);
        }

        if($id > 0){
            try{
                $credentials = new Credential();                         
                $credentials->user_id = $id;
                $credentials->is_deleted = 0;
                $credentials->password = $password;
                $credentials->save();
            } catch(QueryException $e){
                $message = "ERROR";
                DB::rollBack();
                return back()->with('error', $message);
            }
        }
    }

    public function login()
    {
        return view('login.login');
    }

    public function loginPost(Request $request)
    {
      Log::info('loginPost');

      $request->validate([
          'username' => 'required|string',
          'password' => 'required|string|min:6'
      ]);   

      $middleware = new CustomAuthMiddleware();

      $response = $middleware->handle($request, function($request){
        Log::info('Eyy Nakapasok na ako');
        return redirect()->route('index.create');
      });

      return $response;
    }

    public function logout(Request $request)
    {
        if(Session::has('loginId')){
            $request->session()->flush();
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            redirect()->route('login');
        }
    }
}