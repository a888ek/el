<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elite Chalets</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Elite Chalets</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">

                        <a href="{{ route('index') }}" class="nav-item nav-link ">الرئيسية</a>
                        <a href="{{ route('about.index') }}" class="nav-item nav-link active">تفاصيل عنا</a>
                        <a href="{{ route('chalet.index') }}" class="nav-item nav-link ">الشاليهات</a>
                        <a href="{{ route('contact.index') }}" class="nav-item nav-link">تواصل معنا</a>
                    </div>

                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">تفاصيل عنا </h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    @foreach($services as $a)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="{{ $a->image }}"></i>
                            <h5 class="mb-3">{{ $a->title }}</h5>
                            <p class="m-0">{{ $a->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Feature End -->



        <!-- About End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">

                    <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">{{ $experiences[0]->experience }}</h1>
                        <p class="text-white mb-0">عدد الايجارات</p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">{{ $experiences[1]->experience }}</h1>
                        <p class="text-white mb-0">الشاليهات</p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">{{ $experiences[2]->experience }}</h1>
                        <p class="text-white mb-0">سنوات الخبرة</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Facts End -->




        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3"></div>
                    <div class="col-md-6 col-lg-3">
                        <p><i class="fa fa-map-marker-alt me-3"></i>{{ $info->location }}</p>
                        <p><i class="fa fa-phone-alt me-3"></i>{{ $info->phone_number }}</p>
                        <p><i class="fa fa-envelope me-3"></i>{{ $info->email }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="{{ $info->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $info->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="{{ $info->instagram }}"><i class="fab fa-instagram"></i></a>
                        </div>

                    </div>





                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">الشاليهات</p>
                        <div class="row g-2">
                            @foreach($chalets as $chalet)
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ $chalet->image }}" alt="Image">
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">

<div class="col-md-6 text-center text-md-end mb-3 mb-md-0">
    © جميع الحقوق محفوظة

</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
