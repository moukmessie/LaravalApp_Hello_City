<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApisController extends Controller
{

    public function index(Request $request)
    {
       // $ap='166.171.248.255';
        $ipAddress =$request->ip();

       $api=Http::get('https://ipgeolocation.abstractapi.com/v1/?api_key=192a2e6e8ed445489528e4b1783dc00a&ip_address='.$ipAddress);
       $response=$api->json();

       //dd($response);

       return view('pages/home',['response'=>$response]);
    }

    public function about()
    {
        return view('pages/about');
    }


}
