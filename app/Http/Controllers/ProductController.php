<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\ProductRequest;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categoria = Categoria::all();
        $texto=trim($request->get('texto'));
        $productos = Producto::where('nombre','LIKE','%'.$texto.'%')->get();

        return view('searchProduct', [
                        'productos' => $productos,
                        'categorias' => $categoria
                    ], compact('productos', 'texto'));

/**         
*        $texto=trim($request->get('texto'));
*        $productos = DB::table('producto')
*                            ->select('id', 'nombre', 'imagen','categoria_id', 'descripcion')
*                            ->where('nombre','LIKE','%'.$texto.'%')
*                            ->orderBy('nombre', 'asc')
*                            ->paginate(10);
*        $categoria = Categoria::all();
*        return view('searchProduct', compact('productos', 'texto'));
*        
*/
/**
*       $productos = Producto::all();
*        
*        return view('viewsProduct',[
*            'productos' => $productos
*        ]);
*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view("createproduct", compact('categoria'));
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);
      
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;
        $producto->categoria_id = $request->categoria;
        $producto->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
        //TODO: traer el producto con el id 
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
        //TODO terminar el destroy
    }
}
