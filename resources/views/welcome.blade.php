@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <section id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="home-img text-center">
                        <img src="assets/images/hero.png" alt="Profile" width="100%" />
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="home-text">
                        <p class="text-muted mb-1">Hello! I'm</p>
                        <h1 class="text-primary text-uppercase fs-1 fw-bold">
                            Eza Angga Alfian
                        </h1>
                        <h2 class="fs-4 fw-semibold">Junior Web Developer</h2>
                        <p class="mt-3 text-muted">Welcome to My Personal Website.</p>
                        <a href="#portofolio" class="btn btn-primary px-4 py-2 mt-2">My Portfolio</a>
                        <div class="social-media mt-4">
                            <a href="https://github.com/ezanggaa" class="fs-1 md-fs-1"><i
                                    class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/ezaanggaalf" class="fs-1 mx-3 md-fs-1"><i
                                    class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/zanggaalf" class="fs-1 md-fs-1"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About Start -->
    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center align-content-center">
                <div class="col-md-6">
                    <div class="home-img text-center">
                        <img src="assets/images/about.png" alt="Profile" width="100%" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home-text">
                        <h1 class="text-primary text-uppercase fs-1 fw-bold">About Me</h1>
                        <p class="text-muted mt-3">
                            I am a computer science graduate from Universitas Bhayangkara
                            Jakarta Raya with a passion for working as a web developer. I
                            have the ability to create website using the Laravel framework.
                            I can work collaboratively in a team, problem solving, and
                            adapting quickly to new situations. I am always eager to learn
                            and improve my skills in the ever evolving technology industry.
                        </p>
                        <div class="skills mt-4">
                            <h3 class="text-primary text-uppercase fs-1 fw-bold">
                                My Skills
                            </h3>
                            <a href="#" class="fs-1 text-dark"><i class="fa-brands fa-html5"></i></a>
                            <a href="#" class="fs-1 text-dark mx-3"><i class="fa-brands fa-css3-alt"></i></a>
                            <a href="#" class="fs-1 text-dark"><i class="fa-brands fa-square-js"></i></a>
                            <a href="#" class="fs-1 text-dark mx-3"><i class="fa-brands fa-bootstrap"></i></a>
                            <a href="#" class="fs-1 text-dark"><i class="fa-brands fa-laravel"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Portfolio Start -->
    <section id="portfolio">
        <div class="container py-5">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-primary fs-1 fw-bold text-uppercase">
                        My Portfolio
                    </h1>
                </div>
            </div>
            <div class="row py-3 justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/images/laracamp.png" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">Laracamp</h5>
                            <p class="card-text text-muted">
                                HTML, CSS, Javascript, Bootstrap, Laravel.
                            </p>
                            <a href="#" class="btn btn-primary px-4">Preview</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="assets/images/personal.png" class="card-img-top" alt="..." />
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">My Personal Website</h5>
                            <p class="card-text text-muted">HTML, CSS, Bootstrap, Laravel.</p>
                            <a href="#" class="btn btn-primary px-4">Preview</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4 mb-3">
                                  <div class="card">
                                    <img
                                      src="assets/images/blog.png"
                                      class="card-img-top"
                                      alt="..."
                                    />
                                    <div class="card-body text-center">
                                      <h5 class="card-title fw-semibold">Blog Project</h5>
                                      <p class="card-text text-muted">
                                        HTML, CSS, Bootstrap, Laravel.
                                      </p>
                                      <a href="#" class="btn btn-primary px-4">Preview</a>
                                    </div>
                                  </div>
                                </div> -->
            </div>
        </div>
    </section>
    <!-- Portfolio End -->

    <!-- Footer Start -->
    <section id="contact">
        <footer class="text-center text-lg-start bg-white text-muted">
            <!-- Section: Links  -->
            <section class="border-top">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="fs-3 fw-bold mb-4">
                                Eza<span class="text-primary">Anggaa</span>
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer
                                content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-primary text-uppercase fw-bold mb-4">
                                Navigation
                            </h6>
                            <p>
                                <a href="#home" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="#about" class="text-reset">About</a>
                            </p>
                            <p>
                                <a href="#portfolio" class="text-reset">Portfolio</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-primary text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p>
                                <i class="fas fa-home me-3 text-secondary"></i> Bekasi, Jawa
                                Barat
                            </p>
                            <p>
                                <i class="fas fa-envelope me-3 text-secondary"></i>
                                eza.anggaa@gmail.com
                            </p>
                            <p>
                                <i class="fas fa-phone me-3 text-secondary"></i> + 62 812 2031
                                0468
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025)">
                © 2021 Copyright:
                <a class="text-primary fw-bold" href="#home">Eza Angga Alfian</a>
            </div>
            <!-- Copyright -->
        </footer>
    </section>
    <!-- Footer End -->
@endsection
