<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Master
                Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('items.index') }}" class="nav-link">Item
                            List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-sm mt-5">
        <form action="{{ route('items.update', ['item' => $item->item_id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="item_id" id="item_id" value="{{ $item->item_id }}">
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Item</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="itemName" class="form-label">Item Name</label>
                            <input class="form-control @error('itemName') is-invalid @enderror" type="text"
                                name="itemName" id="itemName" value="{{ $item->itemName }}"
                                placeholder="Enter Item Name">
                            @error('itemName')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="itemCode" class="form-label">Item Code</label>
                            <input class="form-control @error('itemCode') is-invalid @enderror" type="text"
                                name="itemCode" id="itemCode" value="{{ $item->itemCode }}"
                                placeholder="Enter Item Code">
                            @error('itemCode')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input class="form-control @error('price') is-invalid @enderror" type="text"
                                name="price" id="price" value="{{ $item->price }}" placeholder="Enter Price">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input class="form-control @error('quantity') is-invalid @enderror" type="text"
                                name="quantity" id="quantity" value="{{ $item->quantity }}"
                                placeholder="Enter Quantity">
                            @error('quantity')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-select">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $item->id == $category->id ? 'selected' : '' }}>
                                    {{ $category->code . ' -' . $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('items.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2">
                                </i> Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
    @vite('resources/js/app.js')
</body>

</html>
