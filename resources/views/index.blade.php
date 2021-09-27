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
                <th>tgl_lahir</th>
                <th>kota</th>
                <th>nama_ortu</th>
                <th>alamat_ortu</th>
                <th>hp</th>
                <th>email</th>

            </tr>

            @foreach($santri as $p)
            <tr>
                <td>{{ $p->IDSANTRI }}</td>
                <td>{{ $p->NAMASANTRI }}</td>
                <td>{{ $p->GENDER }}</td>
                <td>{{ $p->TAGGALLHR }}</td>
                <td>{{ $p->KOTALHR }}</td>
                <td>{{ $p->NAMAORTU }}</td>
                <td>{{ $p->ALAMATORTU }}</td>
                <TD>{{ $p->HP }}</TD>
                <td>{{ $p->EMAIL }}</td>
                <td>{{ $p->PASSWORD }}</td>
                <td>{{ $p->TANGGALMASUK }}</td>
                <td>{{ $P->AKTIF }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>