<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
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
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"> Master
                Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('item.index') }}" class="nav-link">Item
                            List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('item.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif

                    <div class="mb-3 text-center">
                        <i class="bi bi-archive-fill me-3 fs-1"></i>
                        <h4>Create Item</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kodeBarang" id="kodeBarang" value=""
                                placeholder="Enter Code Item">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="namaBarang" id="namaBarang" value=""
                                placeholder="Enter Name Item">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control" type="text" name="hargaBarang" id="hargaBarang"
                                value="" placeholder="Enter Price Item">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsiBarang" id="deskripsiBarang"
                                value="" placeholder="Enter Deskription Item">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuan as $satuan)
                                    <option value="{{ $satuan->id }}"
                                        {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->kode_satuan . ' - ' . $satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('item.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
