<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('ENTER MIDDLEWARE HANDLE ====>');
        if(Auth::check()){
            $user = $request->session()->get('user');
            if($user){
                Log::info($user);
            } else {
                Log::info("Via remember");
                $user = User::where('id', Auth::id())->first();
                Session()->put('user', $user);
                Session()->put('loginId', $user->id);
            }
        } else {
            Log::info('ELSE');
            $username = $request->input('username');
            $password = $request->input('password');
            $user = User::where('email', $username)->first();
            
            Log::info('ELSE');
            $remember = $request->has('remember');

            if($user){
                Log::info('ELSE: '. $user);
                if(Auth::attempt(['email' => $username, 'password' => $password], $remember)){
                    Log::info('Logged In');
                    $request->session()->put('user', $user);
                    $request->session()->put('loginId', $user->Id);
                } else{
                    return back()->with(['password' => 'Invalid password']);
                }
            } else {
                return redirect('/')->with(['error' => 'Invalid Credentials']);
            }
        }

        Log::info('EXIT MIDDLEWARE HANDLE ====>');

        return $next($request);


    }
}
