<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
}


