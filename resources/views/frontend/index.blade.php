<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profession - Personal Portfolio Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Profession is Personal Portfolio Template">
    <meta name="keywords"
        content="business, clean, contact form, corporate, cv, light, minimalist, modern, personal, personal profile, portfolio, resume, vcard, virtual card">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">

    <!-- background -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bg.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/colors/scheme-1.css') }}" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="#wrapper">
                                <img class="logo" src="{{ asset('frontend/images/logo-light.png') }}" alt="">
                                <img class="logo-2" src="{{ asset('frontend/images/logo-dark.png') }}" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a class="active" href="#top">Home<span></span></a></li>
                                <li><a href="#section-about">About<span></span></a></li>
                                <li><a href="#section-services">Services<span></span></a></li>
                                <li><a href="#section-portfolio">Portfolio<span></span></a></li>
                                <li><a href="#section-experiences">Experiences<span></span></a></li>
                                <li><a href="#section-contact">Contact Us<span></span></a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            <section id="section-hero" class="full-height relative no-top no-bottom text-white"
                data-stellar-background-ratio=".2">
                <div class="overlay-gradient">
                    <div class="overlay-bg t30">
                        <div class="center-y fadeScroll relative" data-scroll-speed="4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="spacer-double"></div>
                                        <h5 class="mb20">Introduction</h5>

                                        <div class="h1_big text-white">My Name is Nazmul Islam, a<br> London Based
                                            <div class="typed-strings">
                                                <p>Designer</p>
                                                <p>Programmer</p>
                                                <p>Photographer</p>
                                            </div>
                                            <div class="typed"></div>
                                        </div>

                                        <div class="spacer-double"></div>
                                        <a href="#section-portfolio" class="btn btn-custom color-2">See My Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-about">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5><span class="id-color">About Me</span></h5>
                            <h2>Welcome To My Site</h2>
                        </div>
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <p>I am a website designer from London, with a strong focus in UI/UX design. I love to get
                                new experiences and always learn from my surroundings. I've done more than 285 projects.
                                You can check it through portfolio section on
                                this website. I looking forward to any opportunities and challenges. </p>
                        </div>
                    </div>

                    <div class="spacer-single"></div>

                    <div class="row">
                        <div class="col-md-12">
                            @foreach ($abouts as $key => $about)
                                <div class="skill-bar style-2">
                                    <h5>{{ $about->title }}</h5>
                                    <div class="de-progress">
                                        <div class="value"></div>
                                        <div class="progress-bar" data-value="{{ $about->value }}%">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-services" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-gradient">
                    <div class="overlay-bg">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h5><span class="id-color">My Services</span></h5>
                                    <h2>I'm Available For Hire</h2>

                                    <div id="carousel-3" class="sequence" data-anim="fadeInUp">
                                        @foreach ($services as $service)
                                        <div class="feature-box col-md-4 carousel-item sq-item wow">
                                            <div class="inner">
                                                <i class="icon_lightbulb_alt id-color"></i>
                                                <div class="text">
                                                    <h3>{{ $service->heading }}</h3>
                                                    {{ $service->description }}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-portfolio">
                <div class="container">

                    <!-- portfolio filter begin -->
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h5><span class="id-color">Portfolio</span></h5>
                            <h2>I Love What I Do</h2>
                        </div>

                        <div class="col-md-12 text-center mt-10">
                            <ul id="filters">
                                <li><h3 class="selected">All projects</h3></li>
                            </ul>

                            <div id="gallery"
                                class="gallery full-gallery de-gallery pf_full_width pf_3_cols grid sequence">

                                <!-- gallery item -->
                                @foreach ($portfolio as $user)
                                <div class="item illustration website gallery-item">
                                    <div class="picframe wow">
                                        <a class="image-popup"
                                            href="image/{{ $user->image }}">
                                            <span class="overlay">
                                                <span class="pf_text">
                                                    <span class="project-name">{{ $user->name }}</span>
                                                </span>
                                            </span>
                                            <img src="images/{{ $user->image }}"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>


            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-experiences" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-gradient">
                    <div class="overlay-bg">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding20 wow fadeInRight">
                                        <h2>Experiences</h2>
                                        <div class="exp-box">
                                            <h5>2014 - now</h5>
                                            <h3>Fulltime Freelancer</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae.</p>
                                        </div>
                                        <div class="exp-box">
                                            <h5>2010 - 2014</h5>
                                            <h3>Creative Director at Pixar Studio</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto.</p>
                                        </div>
                                        <div class="exp-box">
                                            <h5>2006 - 2010</h5>
                                            <h3>Web Designer at Microsoft</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="padding20 wow fadeInRight" data-wow-delay=".25s">
                                        <h2>Education</h2>
                                        <div class="exp-box">
                                            <h5>2014</h5>
                                            <h3>Specialize App Design, Harvard University</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae.</p>
                                        </div>
                                        <div class="exp-box">
                                            <h5>2010</h5>
                                            <h3>Master of Design, University of California</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto.</p>
                                        </div>
                                        <div class="exp-box">
                                            <h5>2006</h5>
                                            <h3>Bachelor of Arts, Standford University</h3>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-testimonial">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5><span class="id-color">Testimonials</span></h5>
                            <h2>What They Says</h2>
                        </div>


                        <div id="testimonial-carousel" class="de_carousel sequence" data-wow-delay=".3s">

                            @foreach ($testimunial as $user)
                            <div class="col-md-6 item sq-item wow">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <div class="de_testi_by">
                                            <img src="Testimunial/{{ $user->image }}"
                                                class="img-circle" alt="">
                                            <span>{{ $user->name }}</span>
                                        </div>
                                        <p>{{ $user->description }}</p>
                                    </blockquote>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-fun-facts" class="pt60 pb60 text-light bg-gradient">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                            <div class="de_count">
                                <h3 class="timer" data-to="8240" data-speed="2500">0</h3>
                                <span>Hours of Works</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                            <div class="de_count">
                                <h3 class="timer" data-to="315" data-speed="2500">0</h3>
                                <span>Projects Done</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                            <div class="de_count">
                                <h3 class="timer" data-to="250" data-speed="2500">0</h3>
                                <span>Satisfied Customers</span>
                            </div>
                        </div>

                        <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                            <div class="de_count">
                                <h3 class="timer" data-to="32" data-speed="2500">0</h3>
                                <span>Awards Winning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-contact" class="no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5><span class="id-color">Have Question?</span></h5>
                            <h2>Contact Me Now</h2>
                        </div>

                        <div class="col-md-8 col-md-offset-2 wow fadeInUp">
                            <div class="row">
                                <form name="contactForm" id='contact_form' class="s2" method="post"
                                    action='email.php'>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <input type='text' name='name' id='name' class="form-control"
                                                placeholder="Your Name">
                                            <div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='email' id='email' class="form-control"
                                                placeholder="Your Email">
                                            <div class="line-fx"></div>
                                        </div>

                                        <div class="field-set">
                                            <input type='text' name='phone' id='phone' class="form-control"
                                                placeholder="Your Phone">
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                            <div class="line-fx"></div>
                                        </div>
                                    </div>

                                    <div class="spacer-single"></div>

                                    <div class="col-md-12 text-center">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Submit Form'
                                                class="btn btn-custom color-2">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.
                                        </div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your
                                            message.</div>
                                    </div>
                                </form>
                            </div>

                            <div class="spacer-double"></div>

                            <div class="row text-center wow fadeInUp">
                                <div class="col-md-4">
                                    <div class="wm-1"></div>
                                    <i class="icon_mobile id-color size40 mb20"></i>
                                    <h6 class="id-color">Call Us</h6>
                                    <h4>(208) 333 9296</h4>
                                </div>

                                <div class="col-md-4">
                                    <div class="wm-1"></div>
                                    <i class="icon_house_alt id-color size40 mb20"></i>
                                    <h6 class="id-color">Address</h6>
                                    <h4>Collins Street West, London, UK</h4>
                                </div>

                                <div class="col-md-4">

                                    <div class="wm-1"></div>
                                    <i class="icon_mail_alt id-color size40 mb20"></i>
                                    <h6 class="id-color">Email Us</h6>
                                    <h4>contact@profession.com</h4>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <!-- section begin -->
            <section id="section-map" class="map-container no-top no-bottom" aria-label="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25214.351955908594!2d144.93916650352472!3d-37.81829399866787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1606280383060!5m2!1sen!2sid"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>
            <!-- section close -->


        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <div class="social-icons big">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2022 - Profession by Designesia
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="s1">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/easing.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/enquire.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('frontend/js/typed.js') }}"></script>
    <script src="{{ asset('frontend/js/typed-custom.js') }}"></script>
    <script src="{{ asset('frontend/js/designesia.js') }}"></script>

</body>

</html>
