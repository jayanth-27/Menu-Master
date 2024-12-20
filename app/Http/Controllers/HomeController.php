<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Message;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id); 
        $products=Products::all();
         $products=DB::select('SELECT * FROM products');
         $message= Message::all();

        $message=DB::select('SELECT * FROM messages');
        /*  return view('home')->with('posts', $user->posts); */
        return view('home')->with('products',  $products)->with('message',  $message);
         
       

       
    }
}
