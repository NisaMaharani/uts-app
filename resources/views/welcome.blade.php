<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Penyimpanan Barang</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    </head>
    <body class="container">
        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif
        <div class="mt-4">
            <h2>Data Penyimpanan Barang</h2>
            <div class="mb-2">
                <a href="/create" class="btn btn-primary">Tambah Barang</a>
            </div>
            <div class="card-body">
                <table class="table table-responsive table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Stok Tersedia</th>
                        <th>Harga Satuan</th>
                        <th>Kategori</th>
                    </thead>
                    <tbody>
                        @foreach ($penyimpanans as $penyimpanan)
                        <tr>
                            <td>{{ $penyimpanan->id }}</td>
                            <td>{{ $penyimpanan->nama_barang }}</td>
                            <td>{{ $penyimpanan->deskripsi }}</td>
                            <td>{{ $penyimpanan->stok_tersedia }}</td>
                            <td>{{ $penyimpanan->harga_satuan }}</td>
                            <td>{{ $penyimpanan->kategori }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
