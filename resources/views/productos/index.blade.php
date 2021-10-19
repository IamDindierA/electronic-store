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
            <td><a href="{{route('productos.edit', $producto->id)}}">{{$producto->NombreArticulo}}</a></td>
            <td>{{$producto->Seccion}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Fecha}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->CantidadD}}</td>
        </tr>
        @endforeach
    </table>
@endsection