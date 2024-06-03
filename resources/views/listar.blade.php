@include("base.header")

    @if(session("creado"))
        <b>Pizza creada</b> <br>
    @endif

    <h2>Pizzas disponibles </h2>
    <table>
        <thead>
            <th>
                Nombre
            </th>
            <th>
                Precio
            </th>
            <th>
                Fecha de alta
            </th>
        </thead>
        @foreach($pizzas as $p)
        <tr>
            <td>
                {{ $p -> nombre }}
            </td>
            <td>
                {{ $p -> precio }}
            </td>
            <td>
                {{ $p -> created_at }}
            </td>
        </tr>
        @endforeach
    </table>
    
@include("base.footer")

