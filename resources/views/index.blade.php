<!DOCTYPE html>
<html>
    <head>
        <title>CObaTabel</title>
    </head>

    <body>
        <h3>Data santri</h3>
        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>IdS</th>
                <th>nama</th>
                <th>gender</th>
            </tr>

            @foreach($santri as $p)
            <tr>
                <td>{{ $p->IDSANTRI }}</td>
                <td>{{ $p->NAMASATRI }}</td>
                <td>{{ $p->GENDER }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>