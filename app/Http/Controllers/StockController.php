<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Producto;
use App\Models\Sucursal;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = Stock::get();
        
        return view('viewStock',[
            'stock' => $stock
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $sucursal = Sucursal::all();
        return view("createStock", compact('productos'), compact('sucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'stock' => 'required',
            'precio' => 'required'
        ]);

        $stock = new Stock();
        $stock->stock = $request->stock;
        $stock->precio = $request->precio;
        $stock->producto_id = $request->producto;
        $stock->sucursal_id = $request->sucursal;
        $stock->codigo = $request->sucursal*1000+$request->producto;
        $stock->save();

        return redirect()->route('stock.index');
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
        $stock = Stock::findOrFail($id);

        $productos = Producto::all();
        $sucursal = Sucursal::all();

        return view('editStock',[
            'stock' => $stock,
            'producto' => $productos,
            'sucursal' => $sucursal
        ], compact('stock', 'productos', 'sucursal'));
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
        /*
        $stock = Stock::findOrFail($id);

        $productos = Producto::all();

        return view('editStock',[
            'stock' => $stock,
            'producto' => $productos
        ], compact('stock'));

*/
        $stock = Stock::find($id);
        $stock->stock = $request->stock;
        $stock->precio = $request->precio;
        $stock->producto_id = $request->producto;
        $stock->sucursal_id = $request->sucursal;
        $stock->save();
        
        return redirect()->route('stock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $stock = Stock::where('id', $id)->get();
        dd($request);

        //$producto_id = $stock[0]->$producto_id;

      /*  if(\Storage::disk('nombreStorage')->has($producto[0]->imagen)){
            \Storage::disk('nombreStorage')->delete($producto[0]->imagen)
        }
        *

        $stockEliminar = Stock::find($id);
        $stockEliminar = delete();

        $producto = Producto::where('id', $producto_id)->get();

        $stock = Stock::where('producto_id', $producto_id)->get();

        return view('viewStock',[
            'stock' => $stock
        ]);
        */
    }
}
