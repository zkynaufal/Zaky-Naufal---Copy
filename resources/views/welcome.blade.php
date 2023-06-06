<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Barang</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    @vite('resources/sass/app.scss')
    <style>
        /* Ganti warna background dan font color pada tag body */
        body {
            background-color: #f8f9fa;
            color: #212529;
        }
    </style>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">UTS Master Barang</h1>
        <div class="col-md-4 offset-md-4 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-success" href="home">Mulai</a>
            </div>
        </div>

        <!-- Tambahkan bagian Bio Mahasiswa -->
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <h2>Bio Mahasiswa</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nama:</strong> Zaky Naufal A</li>
                    <li class="list-group-item"><strong>NIM:</strong> 1204210057</li>
                    <li class="list-group-item"><strong>Jurusan:</strong> SIstem Informasi</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Bootstrap dan script lainnya -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
