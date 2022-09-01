<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class doaController extends Controller
{
        public function index(){
        $response = Http::get("https://doa-doa-api-ahmadramadhan.fly.dev/api");
        return view('doa.index',[
            'response'=>json_decode($response)
        ]);
    }
    public function indexId($id){
        $response = Http::get("https://doa-doa-api-ahmadramadhan.fly.dev/api/$id");
        return view('doa.indexId',[
            'response'=>json_decode($response)
        ]);
    }
}

