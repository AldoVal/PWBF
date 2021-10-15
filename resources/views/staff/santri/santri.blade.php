<html>
<head>
	<title>PENGURUS|Edit</title>
</head>
<body>
 
	<h2>Coba Edit</h2>
	<h3>Data Santri</h3>
 
	<a href="/editsantri/tambah"> + Tambah Santri</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID_santri</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Tgl_Lahir</th>
			<th>kota_lahir</th>
		</tr>
		@foreach($santri as $s)
		<tr>
            <td>{{ $s->IDSANTRI }}</td>
			<td>{{ $s->NAMASATRI }}</td>
			<td>{{ $s->GENDER }}</td>
			<td>{{ $s->TAGGALLHR }}</td>
			<td>{{ $s->KOTALHR }}</td>
			<td>
				<a href="/editsantri/edit/{{ $s->IDSANTRI }}">Edit</a>
				|
				<a href="/editsantri/hapus/{{ $s->IDSANTRI}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>