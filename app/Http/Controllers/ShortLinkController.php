<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
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
        $request->validate([
            'original_url' => 'required|url'
         ]);
    
         $input['original_url'] = $request->original_url;
         $input['short_url'] = Str::random(6);
 
    
         ShortLink::create($input);
   
        return redirect('shortener')->with($url = $input['short_url']);
        
    }


    public function show($url)
    {
        return view('front.shortener');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortLink $shortLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShortLink $shortLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShortLink  $shortLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortLink $shortLink)
    {
        //
    }
}
