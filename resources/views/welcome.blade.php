<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Abhiram B S</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('user/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Abhiram</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{{ $profiledata->name }}</h1>
                    {!! $profiledata->content !!}
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="{{ $profiledata->url }}" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset($profiledata->image) }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">


                    @foreach ($clients as $item)
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        {!! $aboutdata->content !!}
        <!-- End About Us Section -->



        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>


                    <div class="row">
                        @foreach ($services as $item)
                            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="{{ $item->icon }}"></i></div>
                                    <h4><a href="">{{ $item->title }}</a></h4>
                                    <p>{!! $item->content !!}</p>
                                </div>
                            </div>
                        @endforeach




                    </div>

                </div>
        </section><!-- End Services Section -->


        @php
            $portfoliodatas = App\Models\Portfolio::where('status', 1)->get();
            $categories = App\Models\Category::orderBy('name', 'ASC')->get();

        @endphp
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>

                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <li data-filter="#all" class="filter-active">All</li>
                    @foreach ($categories as $category)
                        <li data-filter="#category{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach

                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($portfoliodatas as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app" id="all">
                            <div class="portfolio-img"><img src="{{ asset($item->image) }}" class="img-fluid"
                                    alt=""></div>
                            <div class="portfolio-info">
                                <h4>{{ $item->name }}</h4>
                                <a href="{{ asset($item->image) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="{{ $item->name }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ $item->url }}" target="_blank" class="details-link"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                    @foreach ($categories as $category)
                        @php
                            $catwisePortfolio = App\Models\Portfolio::where('category_id', $category->id)->get();
                        @endphp
                        @foreach ($catwisePortfolio as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web"
                                id="category{{ $category->id }}">
                                <div class="portfolio-img"><img src="{{ asset($item->image) }}" class="img-fluid"
                                        alt=""></div>
                                <div class="portfolio-info">
                                    <h4>{{ $item->name }}</h4>
                                    <a href="{{ asset($item->image) }}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox preview-link" title="{{ $item->name }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ $item->url }}" target="_blank" class="details-link"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endforeach


                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                </div>

                <div class="row">
                    @foreach ($teamdatas as $item)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset($item->image) }}" class="img-fluid"
                                        alt=""></div>
                                <div class="member-info">
                                    <h4>{{ $item->name }}</h4>
                                    <span>{{ $item->designation }}</span>
                                    <p>{!! $item->content !!}</p>
                                    <div class="social">
                                        @foreach ($item->socialmedia as $media)
                                            <a href="{{ $media->url }}" target="_blank"><i
                                                    class="{{ $media->icon }}"></i></a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>

                </div>

                <div class="faq-list">
                    <ul>
                        @foreach ($faqdatas as $key => $item)
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                    class="collapse"
                                    data-bs-target="#faq-list-{{ $key }}">{{ $item->question }} <i
                                        class="bx bx-chevron-down icon-show"></i><i
                                        class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-{{ $key }}" class="collapse" data-bs-parent=".faq-list">
                                    {!! $item->answer !!}
                                </div>
                            </li>
                        @endforeach



                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>

                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Javalli Tudoor Thirthahalli Shimoga Karnataka 577226</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>abhirambs97@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>9481187122</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d299.01117922203457!2d75.37855853082893!3d13.731131488753528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sus!4v1695848373441!5m2!1sen!2sus"
                                frameborder="0" style="border:0; width: 100%; height: 290px;"
                                allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="{{ route('contact-store') }}" method="post"
                            style="  width: 100%;
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6" style="padding-bottom: 8px;margin-bottom: 20px;">
                                    <label for="name" style="padding-bottom: 8px;">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name" style="padding-bottom: 8px;">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" style="padding-bottom: 8px;">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                                @error('subject')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name" style="padding-bottom: 8px;">Message</label>
                                <textarea class="form-control" name="message" rows="10"></textarea>
                                @error('message')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="text-center mt-2">
                                <button class="btn btn-info px-5 py-3" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-6 offset-3 footer-about">
                        {{-- <a href="index.html" class="logo d-flex align-items-center">
                        <span>Abhiram</span>
                    </a> --}}
                        <h1 class="text-center text-info fw-bold">Abhiram B S</h1>
                        <p class="text-center">Javalli Tudoor Thirthahalli Shimoga Karnataka 577226</p>
                        <div class="social-links d-flex justify-content-center mt-4">
                            <a href="https://www.facebook.com/abhi.bs.102/" target="_blank"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/abhibs97/" target="_blank"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/@abhiramjavalli5113" target="_blank"><i
                                    class="bi bi-youtube"></i></a>
                            <a href="https://www.linkedin.com/in/abhiram-b-s-502171208/" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="http://github.com/abhibs" target="_blank"><i class="bi bi-github"></i></a>
                            <a href="https://twitter.com/AbhiBS5" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a href="https://in.pinterest.com/abhirambs97/" target="_blank"><i
                                    class="bi bi-pinterest"></i></a>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Abhiram</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://theabhirambsjavalliproject.online/">Abhiram B S</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('user/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('user/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

</body>

</html>
