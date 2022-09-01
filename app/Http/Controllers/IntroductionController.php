<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('policy.accepted');
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
        $validated = $request->validate([
            'game_name' => 'required|unique:introductions|max:20',
            'friend_code' => 'required|unique:introductions|max:20',
            'body' => 'required|max:500|min:5',
        ]);

        // Add to database once validation is complete
        $introduction =  new \App\Models\Introduction;
        $introduction->game_name = $request->game_name;
        $introduction->friend_code = $request->friend_code;
        $introduction->body = $request->body;
        $introduction->save();

        // Send email to myself notifying 
        app(\App\Http\Controllers\MailController::class)->index();

        return view('thank-you');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function show(Introduction $introduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function edit(Introduction $introduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Introduction $introduction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Introduction  $introduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Introduction $introduction)
    {
        $introduction->delete();
        return redirect()->route('dashboard');
    }
}
