<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message= Message::all();

        $message=DB::select('SELECT * FROM messages');

        return view('messages.index')->with('message', $message);
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
    public function storecourtside(Request $request)
    {
        //
        //validation .. the required fields that should not be left empty
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);

       
        
        $message= new Message();
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->subject=$request->input('subject');
        $message->message=$request->input('message');
        $message->recipient="courtside";
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('courtside')->with('success', 'Message Sent Successfull!!');
    }

    public function storebeachside(Request $request)
    {
        //
        //validation .. the required fields that should not be left empty
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);

       
        
        $message= new Message();
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->subject=$request->input('subject');
        $message->message=$request->input('message');
        $message->recipient="beachside";
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('beachside')->with('success', 'Message Sent Successfull!!');
    }

    public function store(Request $request)
    {
        //
        //validation .. the required fields that should not be left empty
        $this->validate($request, [
            'name'=>'required',
            'message'=>'required'
        ]);

       
        
        $message= new Feedback();
        $message->name=$request->input('name');
        $message->message=$request->input('message');
        /* $message->recipient="courtside"; */
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('courtside')->with('success', 'Feedback Sent Successfull!!');
    }
    public function storeriverside(Request $request)
    {
        //
        //validation .. the required fields that should not be left empty
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',

        ]);

       
        
        $message= new Message();
        $message->name=$request->input('name');
        $message->email=$request->input('email');
        $message->subject=$request->input('subject');
        $message->message=$request->input('message');
        $message->recipient="riverside";
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('riverside')->with('success', 'Message Sent Successfull!!');
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
        $message=Message::find($id);
        $message->delete();
        return redirect('messages')->with('success', 'Message Deleted Successfully!!');
    }
}
