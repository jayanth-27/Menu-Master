<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id=auth()->user()->id;
        $user=User::find($user_id); 
        $products=Products::all();
         $products=DB::select('SELECT * FROM products');
         $message= Message::all();

        $message=DB::select('SELECT * FROM messages');

        $feed= Feedback::all();

        $feed=DB::select('SELECT * FROM feedback');
       
        return view('admin.index')->with('products',  $products)->with('message',  $message)->with('feed',  $feed);
    }
    public function profileadmin()
    {
        //
        return view('admin.profileadmin');
    }
    

    public function messagesadmin()
    {
        //
        $message= Message::all();

        $message=DB::select('SELECT * FROM messages');

        return view('admin.messagesadmin')->with('message', $message);
    }

    public function feedbacksadmin()
    {
        //
        $message= Feedback::all();

        $message=DB::select('SELECT * FROM feedback');

        return view('admin.feedbacksadmin')->with('message', $message);
    }

    public function productsadmin()
    {
        //
        $products=Products::all();
        $products=DB::select('SELECT * FROM products');
        return view('admin.productsadmin')->with('products', $products);
    }

    public function usersadmin()
    {
        //
        $users=User::all();
        $users=DB::select('SELECT * FROM users');

        return view('admin.usersadmin')->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user=User::find($id);
       
        $user->delete();
        return redirect('admin.usersadmin')->with('success', 'User Deleted Successfully!!');
    }
    public function destroyuser($id)
    {
        //
        $user=User::find($id);
       
        $user->delete();
        return redirect('usersadmin')->with('success', 'User Deleted Successfully!!');
    }
    public function destroyproduct($id)
    {
        //
        $products=Products::find($id);
        $products->delete();
        return redirect('productsadmin')->with('success', 'Product Deleted Successfully!!');
    }
    public function destroymessage($id)
    {
        //
        $products=Message::find($id);
        $products->delete();
        return redirect('messagesadmin')->with('success', 'Message Deleted Successfully!!');
    }
    public function destroyfeedback($id)
    {
        //
        $products=Feedback::find($id);
        $products->delete();
        return redirect('feedbacksadmin')->with('success', 'FeedBack Deleted Successfully!!');
    }
}
