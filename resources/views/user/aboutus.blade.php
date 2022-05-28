@extends('user.layouts.main')
@section('container')
    <div class="mt-5">
        <!-- Custom styles for this template -->
        <link href="css/about us/assets/carousel.css" rel="stylesheet">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/kantin.jpeg" width="100%" height="100%" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/kantor.jpeg" width="100%" height="100%" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/lapangan.jpeg" width="100%" height="100%" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
          ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            {{-- <div class="row">
                <div class="col-lg-4">
                    <img src="img/logo.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h1>Gilbert Marpaung</h1>
                    <!-- Grid container -->
                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/logo.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h2>Heading</h2>
                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/logo.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h2>Heading</h2>
                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/logo.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h2>Heading</h2>
                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="img/logo.jpeg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h2>Heading</h2>
                    <div class="container p-4 pb-0">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row --> --}}
            <div class="mt-5">
                <div class="row" >
                  <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="img/gilbert.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Gilbert Marpaung</h5>
                          <button type="button" class="btn btn-danger" disabled>Product Manager</button>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="img/otniel.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Otniel Simanungkalit</h5>
                          <button type="button" class="btn btn-danger" disabled>Programmer</button>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="img/resmita.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Resmita Simangunsong</h5>
                          <button type="button" class="btn btn-danger" disabled> Data Analyst</button>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="img/anita.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Anita Luciana Munthe</h5>
                          <button type="button" class="btn btn-danger" disabled>Design UI</button>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="img/profile.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Melince Yigibalom</h5>
                          <button type="button" class="btn btn-danger" disabled>Tester</button>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Gilbert Marpaung</h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some
                        exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/gilbert.jpeg" alt="" style="width: 100%; height:100%">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Otniel Simanungkalit</h2>
                    <p class="lead">Saya Sebagai programer tentu memiliki peran yang sangat penting di dalam project ini karena harus mengimplementasikan ke dalam code program yaitu tampilan, fungsi dan juga menghubungkan ke database baik user, admin ataupun pelayan. walaupun sering terjadi eror yang pastinya tetap mendalami dan mencari kekurangan yang ada sehingga program berjalan sempurna sebagai mana mestinya </p>
                </div>
                <div class="col-md-5">
                    <img src="img/otniel.jpeg" alt="" style="width: 100%; height:100%">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Anita Luciana Munthe</h2>
                    <p class="lead">Dengan memiliki roles sebagai desain UI, saya
                        senang bisa mengambil bagian dalam project ini.
                        Semoga dengan mengikuti project seperti ini, saya semakin
                        terlatih dalam membuat desain-desain UI.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/anita.jpeg" alt="" style="width: 100%; height:100%">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Resmita Simangunsong</h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you
                        an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/resmita.jpeg" alt="" style="width: 100%; height:100%">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Melince Yigibalom</h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content.
                        Again, not really intended to be actually read, simply here to give you a better view of what
                        this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/profile.png" alt="" style="width: 100%; height:100%">
                </div>
            </div>
            <!-- /END THE FEATURETTES -->
        </div><!-- /.container -->
    </div>
@endsection
