<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- output the compiled CSS --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-accent" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section>
        <div id="mainCarousel">
            <div>
                <figure class="main-slider">
                    <img src="{{ asset('images/sliders/slider-1.jpg') }}" class="img-slider" alt="concesiones y proyectos mineros">
                    <figcaption class="info-slider">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                                    <div class="detail-slider">
                                        <h1 class="title-slider">
                                            Choose Best Healthier  Way of Life.
                                        </h1>
                                        <h2 class="subtitle-slider">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.
                                        </h2>
                                        <a href="#contact" class="btn btn-outline-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="main-slider">
                    <img src="{{ asset('images/sliders/slider-2.jpg') }}" class="img-slider" alt="New Quality Vegitables Farm Fresh">
                    <figcaption class="info-slider">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                                    <div class="detail-slider">
                                        <h1 class="title-slider">
                                            New Quality Vegitables Farm Fresh.
                                        </h1>
                                        <h2 class="subtitle-slider">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua nostrud.
                                        </h2>
                                        <a href="#contact" class="btn btn-outline-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="main-slider">
                    <img src="{{ asset('images/sliders/slider-3.jpg') }}" class="img-slider" alt="Get 10% off on Vegetables">
                    <figcaption class="info-slider">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                                    <div class="detail-slider">
                                        <h1 class="title-slider">
                                            Get 10% off on Vegetables.
                                        </h1>
                                        <h2 class="subtitle-slider">
                                            Shop our selection of organic fresh vegetables in a discounted price. 10% off on all vegetables.
                                        </h2>
                                        <a href="#contact" class="btn btn-outline-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="customer-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="h1 text-center mb-4">Menú <span class="text-accent">Categorias</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="customerCarousel" class="customer-slider">
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-1.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-2.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-3.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-4.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-1.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-2.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-3.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                        <div>
                            <figure class="item-customer-slider">
                                <img src="{{ asset('images/categories/category-4.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- output the compiled JS --}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
