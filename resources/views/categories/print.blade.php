<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>

<h2 align="center">
    Data Kategori Buku
</h2>

<table border="1" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
        </tr>
    </thead>

    <tbody>

    @foreach($categories as $category)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->category }}</td>
        </tr>

    @endforeach

    </tbody>
</table>

</body>
</html>