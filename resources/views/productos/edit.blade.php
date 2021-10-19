@extends("../layouts.plantilla")

@section("Header")
Editar Registros
@endsection
@section("Body")
{{-- el valor de la propiedad name de corresponder a la columna de la tabla --}}
    <form method="post" action="{{url('productos',$producto->id)}}">
        <table>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}"></td>
            </tr>
            <tr>
                <td>Seccion: </td>
                <td><input type="text" name="Seccion" value="{{$producto->Seccion}}"></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" name="Precio" value="{{$producto->Precio}}"></td>
            </tr>
            <tr>
                <td>Fecha: </td>
                <td><input type="text" name="Fecha" value="{{$producto->Fecha}}"></td>
            </tr>
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" name="Descripcion" value="{{$producto->Descripcion}}"></td>
            </tr>
            <tr>
                <td>Cantidad: </td>
                <td><input type="text" name="CantidadD" value="{{$producto->CantidadD}}"></td>
            </tr>
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <tr>
            <td><input type="submit" name="enviar" value="Actualizar"></td>
            <td><input type="reset" name="Borrar" value="Borrar campos"></td>
        </tr>
        </table>
    </form>
    <form method="post" action="{{url('productos',$producto->id)}}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Eliminar registro">
    </form>
@endsection