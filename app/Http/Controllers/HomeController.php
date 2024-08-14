<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class HomeController extends Controller
{
    public function index(){
        $products = product::all();
        return view('frontend.home', compact('products'));

    }
}
