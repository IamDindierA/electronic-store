@extends("../layouts.plantilla")


@section("Header")
@endsection
@section("Body")
{{-- el valor de la propiedad name de corresponder a la columna de la tabla --}}
<!-- se requiere en el form de enctype="multipart/form-data" para enviar archivos -->
    <form method="post" action="{{url('/productos')}}" enctype="multipart/form-data">
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
            <tr>
                <td>imagen: </td>
                <td><input type="file" name="file"></td>
            </tr>
        @csrf
        <tr>
            <td><input type="submit" name="enviar" value="Enviar"></td>
            <td><input type="reset" name="Borrar" value="Borrar"></td>
        </tr>
        </table>
    </form>
@endsection
<!-- Agregar formato a esto con js o css -->
@if(count($errors)>0)
    @foreach($errors->all() as $error)
    {{$error}}
    @endforeach
@endif