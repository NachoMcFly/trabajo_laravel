<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("contact");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createproduct");
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $this->validate($request, [
            'nombreProducto' => 'required|min:3',
            'precio' => 'required|integer',
            'stock' => 'required|integer|min:1'
           

            
        ]);

        dd($request);
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
