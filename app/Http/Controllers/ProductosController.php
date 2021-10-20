<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //la variable pruductos es igual a llamar a la metodo estaico
        $productos=Producto::all();
        //la funcion compact crea un array que contiene variables y sus valores
        //all() trae todos los datos de la tabal productos
        return view("productos.index",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //vista ruta create insertar registros

        $this->validate($request,['NombreArticulo'=>'required','Precio'=>'required','Descripcion'=>'required']);//validacion de campo con required

        //Crear una instancia o variable del modelo Producto, (Usando programacion orientada a objetos)
        //se modifica la propiedad de la instancia, el la columna del tabla, request recibe los datos del formulario
        /*
        $producto = new Producto;
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Seccion=$request->Seccion;
        $producto->Precio=$request->Precio;
        $producto->Fecha=$request->Fecha;
        $producto->Descripcion=$request->Descripcion;
        $producto->CantidadD=$request->CantidadD;
        $producto->save(); */

        $entrada=$request->all();//obtiener todos los datos de la peticion
        if($archivo = $request->file('file')){//es como se llama el input file
            $nombre=$archivo->getClientOriginalName();//nombre de la imagen seleccionada
            $archivo->move('imagenes',$nombre);//mueve el archivo a la carpeta imagenes, lo crea automaticamente.
            $entrada['ruta']=$nombre;//la columna llamado ruta debe ser igual a lo almacenado a la variable nombre
        }
        Producto::create($entrada);//modelo mas metodo
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //findOrFail() metodo de los modelos de laravel, usado en los controladores
        //permite recuperar un registro de un modelo a partir de su id si comprobar que existe
        $producto=Producto::findOrFail($id);
        return view("productos.show",compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findOrFail() metodo de los modelos de laravel, usado en los controladores
        //permite recuperar un registro de un modelo a partir de su id si comprobar que existe
        $producto=Producto::findOrFail($id);
        return view("productos.edit",compact("producto"));
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
        //print_r() o var_dump(), o quizás mejor dd() que es una función específica de Laravel que muestra el contenido de una variable
        $producto=Producto::findOrFail($id);
        $producto->update($request->all());//el objeto request recupera todos los datos enviados por la solicitud en forma de array
        return redirect("/productos");
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
        $producto=Producto::findOrFail($id);//obtener el articulo por su id
        $producto->delete();
        return redirect("/productos");//redirige al index
    }
}
