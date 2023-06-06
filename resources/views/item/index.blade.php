<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-BsJ4t27OjOgrGow+eF5+fpZ3OaUtmx+pxoSfO2YvzD/6+L3GG0S2EwvcYn3W7OK4" crossorigin="anonymous">
    <style>
        .navbar-custom {
            background-color: #8B0000;
        }
    </style>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">Master Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('item.index') }}"
                            class="nav-link active">Item List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-0">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('item.create') }}" class="btn btn-primary">Create Item</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th></th>
                        @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->kodeBarang }}</td>
                        <td>{{ $item->namaBarang }}</td>
                        <td>{{ $item->hargaBarang }}</td>
                        <td>{{ $item->deskripsiBarang }}</td>
                        <td>{{ $item->satuan->nama_satuan }}</td>
                        <td>@include('item.action')
                    </tr>
                </thead>
                <tbody>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-/7hmo+xBnWw1Gq6GGQOpz3rSGbN5gHt1+PPAcNktd6GxTL6/CMt/2iDHqW6RV0LW" crossorigin="anonymous">
    </script>
</body>
@endsection
