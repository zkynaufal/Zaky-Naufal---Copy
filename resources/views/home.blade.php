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
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"> Master Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                            class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('item.index') }}" class="nav-link">Item
                            List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4>{{ $pageTitle }}</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <h4 class="mb-0">Proyek Pemrograman Framework {{ $pageTitle }}.</h4>
        </div>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <p>Saya dengan bangga mengumumkan bahwa saya telah berhasil menyelesaikan proyek pemrograman menggunakan
                sebuah
                framework. Proyek ini melibatkan pengembangan aplikasi web yang memanfaatkan kemampuan dan fitur-fitur
                yang
                disediakan oleh framework tersebut.</p>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
