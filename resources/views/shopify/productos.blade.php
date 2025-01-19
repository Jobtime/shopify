<!DOCTYPE html>
<html>
<head>
    <title>Shopify Products</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel Shopify</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('shopify-products') }}">Products</a>  <!-- Enlace a productos -->
                    </li>
                    
                </ul>
            </div>
        </div>
</nav>
<div class="container">
    <h2 style="margin-top:20px; margin-bottom:10px;">Productos de Shopify</h2>

    @if (isset($error))
        <p>Error: {{ $error }}</p>
    @else
    <div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Imagen del producto -->
                    @if(isset($product['images'][0]['src']))
                        <img src="{{ $product['images'][0]['src'] }}" alt="{{ $product['title'] }}" class="card-img-top" />
                    @endif
                    
                    <div class="card-body">
                        <!-- Título del producto -->
                        <h5 class="card-title">{{ $product['title'] }}</h5>

                        <!-- Precio del producto -->
                        @if(isset($product['variants'][0]['price']))
                            <p class="card-text">Price: ${{ number_format($product['variants'][0]['price'], 2) }}</p>
                        @else
                            <p class="card-text">Price not available</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    @endif
</div>
</body>
</html>
