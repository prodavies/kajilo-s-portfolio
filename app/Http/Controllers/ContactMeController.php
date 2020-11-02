<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMe;
class ContactMeController extends Controller
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
        return view("contact");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating the input
        $validator = $request->validate([
            'name'=>'string|required|min:3',
            'email'=>'required|email',
            'subject'=>'string|required|min:3',
            'message'=>'string|required|min:8'
        ]);
        //create new instance
        $contactMe = new ContactMe;
        $contactMe->name = $request->input("name");
        $contactMe->email = $request->input("email");
        $contactMe->subject = $request->input("subject");
        $contactMe->message = $request->input("message");
        $contactMe->save();
        return back()->with('sent-message','Your message has been sent. Thank you!');
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
