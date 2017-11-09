<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * l'accueil de l'admin
     */
    public function index()
    {
        return view('Admin/index');
    }

    /**
     * retourne les articles pour un admin
     */
    public function articles()
    {
        return view('Admin/articles');
    }


    /**
     * retourne les articles pour un admin
     */
    public function refs()
    {
        return view('Admin/refs');
    }

    /**
     * retourne les articles pour un admin
     */
    public function reds()
    {
        return view('Admin/reds');
    }

    /**
     * retourne les articles pour un admin
     */
    public function tags()
    {
        return view('Admin/tags');
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
    }
}
