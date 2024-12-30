<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Http::get('http://localhost:8080/selectSupplierInfo');
        return view('welcome', [

            'suppliers' => json_decode($suppliers),
        ]);
    }
}
