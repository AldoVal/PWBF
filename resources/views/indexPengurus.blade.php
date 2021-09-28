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
            </tr>

            @foreach($pengurus as $a)
            <tr>
                <td>{{ $a->IDPENGURUS }}</td>
                <td>{{ $a->NAMA }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>