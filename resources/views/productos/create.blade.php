@extends("../layouts.plantilla")

@section("Header")
@endsection
@section("Body")
{{-- el valor de la propiedad name de corresponder a la columna de la tabla --}}
    <form method="post" action="{{url('/productos')}}">
        <table>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="NombreArticulo"></td>
            </tr>
            <tr>
                <td>Seccion: </td>
                <td><input type="text" name="Seccion"></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" name="Precio"></td>
            </tr>
            <tr>
                <td>Fecha: </td>
                <td><input type="text" name="Fecha"></td>
            </tr>
            <tr>
                <td>Descripcion: </td>
                <td><input type="text" name="Descripcion"></td>
            </tr>
            <tr>
                <td>Cantidad: </td>
                <td><input type="text" name="CantidadD"></td>
            </tr>
        @csrf
        <tr>
            <td><input type="submit" name="enviar" value="Enviar"></td>
        </tr>
        </table>
    </form>
@endsection