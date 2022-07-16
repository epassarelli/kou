<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\StoreProducto;


class ProductosController extends Controller
{
   public function index(){

        //$productos = Producto::all();
        $productos = Producto::orderBy('id','desc')->paginate();
        return view('productos.index',compact('productos'));
   }

   public function create(){
        return view('productos.create');
   }

   public function store(StoreProducto $request){
          /*
          $request->validate([
          'codigo' => 'required|max:10',
          'descripcion' => 'required|min:10',
          'detalle' => 'required',
          'precio' => 'required'               
          ]);        
          */
        /*   
        $producto = new Producto();    
        $producto->codigo = $request->codigo;
        $producto->descripcion = $request->descripcion;
        $producto->detalle = $request->detalle;
        $producto->precio = $request->precio;
        $producto->save();
        */
        // otra forma de generar y grabar 
       
        
             
        $producto = Producto::create([
          'codigo' => $request->codigo,
          'descripcion' => $request->descripcion,
          'detalle' => $request->detalle,
          'precio' => $request->precio,
          'slug' => $request->slug
        ]);
      

        return redirect()->route('productos.show', $producto);
        
        //return $request->all();
   }


   public function show(Producto $producto){
    
    $producto = Producto::find($producto->id);
    return view('productos.show',compact('producto'));
   }

   /* forma tradicional 
   public function edit($id){
     $producto = Producto::find($id);
     return  $producto; //view('productos.show',compact('producto'));
    }
   */
   //otra forma de editar 
   public function edit(Producto $producto){  
     //$producto = Producto::find($id);
     return  view('productos.edit',compact('producto'));
    }

    public function update(StoreProducto $request,Producto $producto) {
          
          /*
          $request->validate([
                    'codigo' => 'required|max:10',
                    'descripcion' => 'required|min:10',
                    'detalle' => 'required',
                    'precio' => 'required'               
          ]);        
          */
          //return $request->all();
          /* reemplazo por asignacion masiva
          $producto->codigo = $request->codigo;
          $producto->descripcion = $request->descripcion;
          $producto->detalle = $request->detalle;
          $producto->precio = $request->precio;
          $producto->save();
          */

          $producto->update($request->all());

          
          return redirect()->route('productos.show', $producto);

    }

    public function destroy(Producto $producto) {
          $producto->delete();
          return redirect()->route('productos.index');
    }
}
