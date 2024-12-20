<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function storeriversidefeedback(Request $request)
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
        $message->recipient="riverside";
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('riverside')->with('success', 'Feedback Sent Successfull!!');
    }

    public function storebeachsidefeedback(Request $request)
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
        $message->recipient="beachside";
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('beachside')->with('success', 'Feedback Sent Successfull!!');
    }
    public function storecourtsidefeedback(Request $request)
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
        $message->recipient="courtside";
        /* $message->user_id=auth()->user()->id; */
        $message->save();

        return redirect('courtside')->with('success', 'Feedback Sent Successfull!!');
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
    }
}
