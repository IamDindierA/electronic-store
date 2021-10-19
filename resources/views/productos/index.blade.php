@extends("../layouts.plantilla")

@section("Header")
@endsection
@section("Body")
{{-- Leer productos --}}
    <table>
        <tr>
            <td>Nombre Articulo</td>
            <td>Seccion</td>
            <td>Precio</td>
            <td>Fecha</td>
            <td>Descripcion</td>
            <td>CantidadD</td>
        </tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->NombreArticulo}}</td>
            <td>{{$producto->Seccion}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Fecha}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->CantidadD}}</td>
        </tr>
        @endforeach
    </table>
@endsection