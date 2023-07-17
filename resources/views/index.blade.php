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

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">

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
                    <h1 class="m-0">ايلت شاليه </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('index') }}" class="nav-item nav-link active">الرئيسية</a>
                        <a href="{{ route('about.index') }}" class="nav-item nav-link">تفاصيل عنا</a>
                        <a href="{{ route('chalet.index') }}" class="nav-item nav-link">الشاليهات</a>
                        <a href="{{ route('contact.index') }}" class="nav-item nav-link">تواصل معنا</a>
                    </div>

                </div>

            </nav>
            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">خدمة شاليهات سريعة ومتميزة</h1>
                            <p class="text-white pb-3 animated slideInDown">نحن نقدم أفضل الشاليهات بخدمة ممتازة وسرعة عالية. تعايش مع الطبيعة واستمتع بإجازة لا تُنسى في شاليهاتنا المميزة.</p>

                            <a href="{{ route('contact.index') }}" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">تواصل معنا</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
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

        <!-- Newsletter Start -->




        <!-- Newsletter End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="text-center mb-5" style="font-family: 'Almarai', sans-serif;">الشاليهات</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <!-- القائمة المستعرضة للمدينة -->
<ul class="list-inline mb-5" id="portfolio-flters">
    <li class="mx-2 active" data-filter="*">الكل</li>
    <li class="mx-2" data-filter=".Gaza">غزة</li>
    <li class="mx-2" data-filter=".BeitHanoun">بيت حانون</li>
    <!-- يمكنك إضافة مزيد من الخيارات هنا -->
</ul>

                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    @foreach ($chalets as $chalet)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $chalet->city->name }}"> <!-- استخدم اسم المدينة من العلاقة مع جدول المدينة -->
                            <div class="rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ $chalet->image }}" alt="">
                                    <div class="portfolio-overlay">
                                        <a class="btn btn-square btn-outline-light mx-1" href="{{ route('chalets.show', $chalet->id) }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light p-4">

                                    <h5 class="lh-base mb-0">{{ $chalet->name }}</h5>
                                    <p class="text-primary fw-medium mb-2">{{ $chalet->citys->name }}  /  {{ $chalet->location }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <!-- Projects End -->
        <br>
        <br>
<div class="container-fluid"></div>
<br>
        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="container py-5 px-lg-5">


                <h1 class="text-center mb-5">! ماذا يقول عملاؤنا عن الشاليهات</h1>
                <div class="owl-carousel testimonial-carousel">
                    @foreach($customers as $customer)
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>{{ $customer->message }}</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-4">
                                <h5 class="mb-1">{{ $customer->name }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div>
                </div>
            </div>
        </div>
        <div class="owl-nav"><div class="owl-prev"></div><div class="owl-next"></div></div></div>

        <!-- Testimonial End -->





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
