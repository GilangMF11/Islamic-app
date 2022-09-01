<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class jadwalSholatController extends Controller
{
        public function index(){
        $response = Http::get("https://api.myquran.com/v1/sholat/kota/semua");
        return $response->json();
        }
        public function indexId($id){
            $response = Http::get("https://jadwal-shalat-api.herokuapp.com/daily&cityId=$id");
            return $response->json();
    }
}
