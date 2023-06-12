@extends('layouts.main')

@section('container')
    <style>
        .rounded-circle {
            width: 300px;
            height: 160px;
            object-fit: cover;
        }
    </style>

    <main class="flex-shrink-0">
        <!-- Header-->



        <header class="bg-dark">
            {{-- back --}}
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start" style="color: white;">
                            <h1 class="display-5 fw-bolder text-white mb-2"></h1>

                            <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive
                                mobile-first sites with Bootstrap, the worlds most popular front-end open source
                                toolkit!</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center border-rounded"><img
                            class="img-fluid rounded-3 my-5" src="img/Rcmd4.png" alt="..." />
                    </div>
                </div>
            </div>
            {{-- back --}}
        </header>

        <section>
            <div class="container my-5">
                <div class="row ">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h1 class="fw-bolder mb-0">Mix And Match With Unembellished</h1>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <img class="card-img-top" src="img/Rcmd1.png" alt="Card image cap">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        <img class="card-img-top" src="img/Rcmd2.png" alt="Card image cap">
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        <img class="card-img-top" src="img/Rcmd3.png" alt="Card image cap">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        <img class="card-img-top" src="img/Rcmd4.png" alt="Card image cap">
                    </div>

                </div>
            </div>

            <div class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-5 my-5 ">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="img/Denim_Facts.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2"></div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Tahukah anda?</h5>
                                </a>
                                <p class="card-text mb-0">Seiring berjalannya waktu, denim telah mengalami evolusi dalam
                                    berbagai bentuk. Awalnya, denim hanya tersedia dalam warna biru gelap. Namun,
                                    sekarang
                                    kita dapat menemukan denim dengan berbagai warna dan efek wash seperti acid wash,
                                    stonewashed, dan ripped</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="small">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="img/Quotes_Tekstil.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2"></div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Tentang tekstil</h5>
                                </a>
                                <p class="card-text mb-0">"Tekstil adalah simbol kreativitas manusia dan kemampuan kita
                                    untuk menciptakan keindahan dari bahan sederhana."</p>
                                <p> - Diane von Furstenberg</p>
                            </div>
                            <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                <div class="d-flex align-items-end justify-content-between">
                                    <div class="d-flex align-items-center">

                                        <div class="small">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="img/Bahan_Polyester.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2"></div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">All about fabric</h5>
                                </a>
                                <p class="card-text mb-0"> Polyester memiliki daya tahan yang baik terhadap noda dan
                                    luntur
                                    warna. Ini membuatnya menjadi pilihan yang baik untuk pakaian yang sering terkena
                                    noda
                                    atau memerlukan pencucian yang intensif. Namun, perlu diingat bahwa pewarnaan
                                    polyester
                                    bisa lebih sulit untuk dicapai dan tahan lama.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>



    </main>
@endsection

{{-- <div class="container px-5 my-5">
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center mb-5 ">
                            <h2 class="fw-bolder">****</h2>
                            <br>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    </div>
                </div>
                <!-- Gallery -->
            </section>
        </div> --}}
