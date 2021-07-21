<?php

namespace App\Http\Controllers;

use App\Letters;
use Illuminate\Http\Request;

class LettersController extends Controller
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
    public function store(Request $request)
    {
        //

        $letters = new Letters;
        $letters->email = $request->input('email');
        $letters->name = $request->input('name');
      
        $letters->save();
	return redirect('membership')->with('status','success');

		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Letters  $letters
     * @return \Illuminate\Http\Response
     */
    public function show(Letters $letters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Letters  $letters
     * @return \Illuminate\Http\Response
     */
    public function edit(Letters $letters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Letters  $letters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letters $letters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Letters  $letters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letters $letters)
    {
        //
    }
}
