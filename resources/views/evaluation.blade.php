<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elite Chalets</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<style>
    input[type="radio"] {
position: absolute;
opacity: 0;
width: 0;
height: 0;
}

/* تحديد أسلوب التسمية للعلامة الخاصة بالنجوم */
label {
display: inline-block;
margin: 0 5px;
cursor: pointer;
}
/* تحديد أسلوب التصميم للنجوم عندما يتم اختيار تصنيف معين */
input[type="radio"]:checked + label > .fa-star {
color: #f8c301;
}

/* تحديد أسلوب التصميم للنجوم السابقة عندما يتم اختيار تصنيف معين */
input[type="radio"]:checked ~ label > .fa-star {
color: #f8c301;
}

/* تحديد أسلوب التسمية للنجوم */
.fa-star {
font-size: 24px;
color: #ddd;
}

/* تغيير لون النجمة عندما يتم التأشير عليها */
input[type="radio"]:checked + label > .fa-star {
color: #f8c301;
}

/* تحديد أسلوب التصميم لعنصر الإدخال الإجمالي /
.rating {
display: inline-block;
direction: ltr; / تحديد اتجاه العرض من اليسار إلى اليمين /
unicode-bidi: bidi-override; / تمكين العرض من اليمين إلى اليسار */

/* تحديد أسلوب التصميم للعنصر الأبوين */
.col-12 {
width: 100%;
}
</style>
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
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
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
                        <a href="{{ route('about.index') }}" class="nav-item nav-link">تفاصيل عنا</a>
                        <a href="{{ route('chalet.index') }}" class="nav-item nav-link ">الشاليهات</a>
                        <a href="{{ route('contact.index') }}" class="nav-item nav-link">تواصل معنا</a>
                        <a  class="nav-item nav-link active">التقيم</a>
                    </div>

                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">التقييم</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">

                                </ol>
                            </nav>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
       <!-- evaluation.blade.php -->


       <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>التقييم<span></span></p>
                <h1 class="text-center mb-5">اخبرنا رأيك في الشاليه</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form action="{{ route('customer.store', ['id' => $chalet->id]) }}" method="POST">
                            @csrf <!-- إضافة CSRF token -->

                            <div class="form-group">
                                <label for="name">اسمك:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="message">الرسالة:</label>
                                <textarea class="form-control" id="message" name="message" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>التقييم:</label><br>
                                <input type="radio" name="rating" value="5" id="star-5" required> <label for="star-5"><i class="fa fa-star"></i></label>
                                <input type="radio" name="rating" value="4" id="star-4" required> <label for="star-4"><i class="fa fa-star"></i></label>
                                <input type="radio" name="rating" value="3" id="star-3" required> <label for="star-3"><i class="fa fa-star"></i></label>
                                <input type="radio" name="rating" value="2" id="star-2" required> <label for="star-2"><i class="fa fa-star"></i></label>
                                <input type="radio" name="rating" value="1" id="star-1" required> <label for="star-1"><i class="fa fa-star"></i></label>
                            </div>

                            <button type="submit" class="btn btn-primary">إرسال الرسالة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        تم إرسال التقييم بنجاح!
    </div>
@endif




        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3"></div>


                </div>
                    </div>
                    <div class="container px-lg-5">
                        <div class="copyright">
                            <div class="row">

        <div class="col-md-6 text-center text-md-end mb-3 mb-md-0">
            &copy; جميع الحقوق محفوظة

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
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>
