<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/se.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                        <a  class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    </div>


                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">{{ $chalet->name }}</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <!-- عرض اسم المدينة باستخدام العلاقة -->
                                    <li class="breadcrumb-item"><a class="text-white" href="#">{{ $chalet->city->name }}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Navbar & Hero End -->


        <!-- 404 Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5 text-center">
              <div class="row justify-content-center">
                <div class="slider">
                    <div class="slides">
                        @foreach($images as $image)
                            <img src="{{ asset($image->image) }}" alt="Slide{{ $loop->iteration }}">
                        @endforeach
                    </div>

                  <div class="buttons">
                    <button class="prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="next"><i class="fas fa-chevron-right"></i></button>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="bg-light p-4">


                    <div class="imgtt p-2">
                        <h2 class="text-primary mb-3" style="font-size: 2rem; font-weight: bold;">{{ $chalet->name }}</h2>

                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="star-5" @if ($chalet->averageRating() <= 5) checked @endif>
                            <label for="star-5"><i class="fa fa-star"></i></label>

                            <input type="radio" name="rating" value="4" id="star-4" @if ($chalet->averageRating() <= 4) checked @endif>
                            <label for="star-4"><i class="fa fa-star"></i></label>

                            <input type="radio" name="rating" value="3" id="star-3" @if ($chalet->averageRating() <= 3) checked @endif>
                            <label for="star-3"><i class="fa fa-star"></i></label>

                            <input type="radio" name="rating" value="2" id="star-2" @if ($chalet->averageRating() <= 2) checked @endif>
                            <label for="star-2"><i class="fa fa-star"></i></label>

                            <input type="radio" name="rating" value="1" id="star-1" @if ($chalet->averageRating() <= 1) checked @endif>
                            <label for="star-1"><i class="fa fa-star"></i></label>
                          </div>


                        <br>

                        <span class="place-label" style="font-size: 1rem; font-weight: normal;">المكان :</span>
                        <span class="place-label" style="font-size: 1rem; font-weight: normal;">{{ $chalet->location }}</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal; " >-</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal;"> السعر :</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal;">{{ $chalet->price }}</span>

                        <br>

                        <span class="price-label" style="font-size: 1rem; font-weight: normal;"> التقييم :</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal;">{{ $chalet->averageRating() }}</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal; " >-</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal;"> التفاصيل :</span>
                        <span class="price-label" style="font-size: 1rem; font-weight: normal;">{{ $chalet->description }}</span>

                        <br>

                        <a href="{{ route('customer.create', $chalet->id) }}"> اضغط هنا لتقييم الشاليه </a>
                        <!-- في صفحة تفاصيل الشاليه -->



                    <!-- باقي العرض الخاص بالنموذج هنا -->




                                            </div>

                    <table class="info-table">
                        <thead>
                            <tr>
                                <th>مساحة الشاليه</th>
                                <th>بركة سباحة</th>
                                <th>الألعاب</th>
                                <th>  الغرف</th>

                                <th>عدد الأشخاص</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $chalet->chalet_area }}</td>
                                <td>{{ $chalet->pool_area }}</td>
                                <td>{{ $chalet->games }}</td>
                                <td>{{ $chalet->outdoor_sessions }}</td>

                                <td>{{ $chalet->capacity }}</td>
                            </tr>
                        </tbody>
                    </table>

                  <br>
                  <br>
                  <div class="container">
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
              <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
              </div>
          @endif
                      <div class="imgtt p-2">

                          <!-- باقي الكود الخاص بعرض تفاصيل الشاليه -->
                          <!-- زر فتح نافذة الحجز -->
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              حجز هذا الشاليه
                          </button>
                      </div>
                  </div>

                  <!-- نافذة الحجز -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">حجز {{ $chalet->name }}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="{{ route('booking.store', ['id' => $chalet->id]) }}" onsubmit="return validateForm()">
                                      @csrf

                                      <div class="mb-3">
                                          <label for="first-name" class="col-form-label">الاسم الأول:</label>
                                          <input type="text" class="form-control" id="first-name" name="first_name" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="last-name" class="col-form-label">اسم العائلة:</label>
                                          <input type="text" class="form-control" id="last-name" name="last_name" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="phone-number" class="col-form-label">رقم الهاتف المحمول:</label>
                                          <input type="tel" class="form-control" id="phone-number" name="phone_number" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="id-number" class="col-form-label">رقم الهوية:</label>
                                          <input type="text" class="form-control" id="id-number" name="id_number" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="email" class="col-form-label">البريد الإلكتروني:</label>
                                          <input type="text" class="form-control" id="email" name="email" required>
                                      </div>
                                      <div class="mb-3">
                                          <label for="message-text" class="col-form-label">الرسالة:</label>
                                          <textarea class="form-control" id="message-text" name="message" required></textarea>
                                      </div>
                                      <div class="mb-3">
                                          <label for="booking-date" class="col-form-label">تاريخ الحجز:</label>
                                          <input type="date" class="form-control" id="booking-date" name="booking_date" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="booking-time" class="col-form-label">وقت الحجز:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="booking_time" id="morning" value="0" required>
                                            <label class="form-check-label" for="morning">صباحي</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="booking_time" id="evening" value="1" required>
                                            <label class="form-check-label" for="evening">مسائي</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="booking_time" id="all-day" value="2" required>
                                            <label class="form-check-label" for="all-day">صباحي ومسائي</label>
                                        </div>
                                    </div>

                                      <button type="submit" class="btn btn-primary">إرسال</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>




                </div>
              </div>
            </div>

          </div>




        <!-- 404 End -->

        <script>
            const slides = document.querySelector('.slides');
            const slide = document.querySelectorAll('.slides img');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            let counter = 1;
            const size = slide[0].clientWidth;

            slides.style.transform = 'translateX(' + (-size * counter) + 'px)';

            nextBtn.addEventListener('click', () => {
              if (counter >= slide.length - 1) return;
              slides.style.transition = 'transform 0.4s ease-in-out';
              counter++;
              slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
            });

            prevBtn.addEventListener('click', () => {
              if (counter <= 0) return;
              slides.style.transition = 'transform 0.4s ease-in-out';
              counter--;
              slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
            });

            slides.addEventListener('transitionend', () => {
              if (slide[counter].id === 'last-clone') {
                slides.style.transition = 'none';
                counter = slide.length - 2;
                slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
              }

              if (slide[counter].id === 'first-clone') {
                slides.style.transition = 'none';
                counter = slide.length - counter;
                slides.style.transform = 'translateX(' + (-size * counter) + 'px)';
              }
            });
          </script>
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
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
