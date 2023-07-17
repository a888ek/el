<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Chalet;
use App\Models\Image;

class ChaletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chalets');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

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
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chalet = Chalet::findOrFail($id); // Fetch the Chalet based on the provided ID
        $images = Image::where('chalet_id', $id)->get(); // Fetch all images related to the Chalet ID

        return view('select', compact('chalet', 'images'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chalet $chalet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chalet  $chalet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chalet $chalet)
    {
        //
    }
}
