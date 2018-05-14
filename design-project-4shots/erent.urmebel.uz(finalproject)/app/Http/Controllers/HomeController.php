<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user = Auth::user();
          $products = DB::table('products')->where('user_id', '=', $user->id)->paginate(5);

    $images= Images::all();

        return view('home')->with("products", $products)->with("images", $images)->with('user', $user);
    }
}
