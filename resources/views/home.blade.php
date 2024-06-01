<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Tony</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ url('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + Meyawo main styles -->
    <link rel="stylesheet" href="{{ url('assets/css/meyawo.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css"
        integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- (Optional) Use CSS or JS implementation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="{{ url('#') }}">Tony</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="{{ url('#home') }}">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="{{ url('#about') }}">About</a>
                </li>
                <li class="item">
                    <a class="link" href="{{ url('#portfolio') }}">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="{{ url('#testmonial') }}">Testmonial</a>
                </li>
                <li class="item">
                    <a class="link" href="{{ url('#blog') }}">Blog</a>
                </li>
                <li class="item">
                    <a class="link" href="{{ url('#contact') }}">Contact</a>
                </li>
                <li class="item ml-md-3">
                    <a href="{{ url('components.html') }}" class="btn btn-primary">Components</a>
                </li>
            </ul>
            <a href="{{ url('javascript:void(0)') }}" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">I am Anthony Chimaobi</span>
            </h1>
            <p class="header-subtitle">BACKEND WEB DEVELOPER</p>

            <button class="btn btn-primary"><a href="https://github.com/ChunkBraniac" class="text-light"
                    target="_blank">Visit My Works</a></button>
        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="{{ url('assets/imgs/man.png') }}" class="about-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        Hello! I'm Anthony Chimaobi, a passionate website developer & backend developer with a strong
                        background in HTML5 <i class="fab fa-html5"></i>, css3 <i class="fab fa-css3"></i>, Bootstrap <i
                            class="fa-brands fa-bootstrap"></i>, PHP <i class="fa-brands fa-php"></i>, Laravel <i
                            class="fa-brands fa-laravel"></i> & MySQL <i class="fa-solid fa-database"></i> . With 5
                        years of experience in the industry, I've honed my ability to transform ideas into compelling
                        websites.
                        <br>
                        Let's create something amazing together. Feel free to browse through my portfolio and reach out
                        if you'd like to collaborate!
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4"><a href="{{ asset('CV.pdf') }}"
                            class="" download="Tony's CV">Download CV</a></button>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ url('images/dbms-mg.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Database Management</h6>
                            <p class="subtitle mt-5">Crafting tailored database solutions that fit your unique business
                                needs, from initial schema design to full deployment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ url('images/webdev.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Website Development</h6>
                            <p class="subtitle">I offer professional web design services, creating visually stunning,
                                user-friendly, and responsive websites tailored to enhance your brand's online presence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{ url('images/web-design.svg') }}"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                                class="icon">
                            <h6 class="title">Website Design</h6>
                            <p class="subtitle">I offer professional web design services, creating visually stunning,
                                user-friendly, and responsive websites tailored to enhance your brand's online presence.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('#') }}" class="portfolio-card">
                        <img src="{{ url('images/movie-website1.png') }}" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Movie Website</h5>
                                    <p class="font-weight-normal">I designed and developed a dynamic movie website by
                                        integrating a sleek, user-friendly interface with a robust backend, ensuring
                                        seamless navigation, real-time updates, and an engaging user experience for
                                        movie enthusiasts.</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('#') }}" class="portfolio-card">
                        <img src="{{ url('images/shop.png') }}" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>E-commerce Websote</h5>
                                    <p class="font-weight-normal">I designed and developed a comprehensive e-commerce
                                        website by combining an intuitive, visually appealing interface with secure
                                        payment systems and efficient product management, providing users with a
                                        seamless and enjoyable shopping experience.</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <button class="btn btn-lg my-font btn-light rounded"><a href="mailto:anthonyobah37@gmail.com">Hire
                            Me</a></button>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{ url('assets/imgs/avatar2.jpg') }}" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">"Working with Anthony has been an absolute pleasure.
                                He transformed our vision into a beautiful, user-friendly e-commerce website that has
                                significantly boosted our online sales. His attention to detail, creativity, and
                                commitment to delivering on time exceeded our expectations. We couldn't be happier with
                                the results!"</p>
                            <h6 class="testimonial-card-title">— Adams, CEO of FashionHub</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{ url('assets/imgs/avatar3.jpg') }}" class="testimonial-card-img"
                                alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">"Anthony is a web design genius! He took our outdated
                                site and turned it into a modern, responsive platform that our customers love. His
                                professionalism and ability to understand our needs made the entire process smooth and
                                enjoyable. I highly recommend Anthony for any web development project."</p>
                            <h6 class="testimonial-card-title">— Jane Smith, Founder of TechWave</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <p class="col-6 m-auto">
                I'm excited to hear about your project and how I can help bring your vision to life. Whether you have a
                question, need a quote, or want to discuss a potential collaboration, feel free to reach out.

                <br><br>
                <h4>Get in Touch:</h4>

                Email: <a href="mailto:anthonyobah37@gmail.com">anthonyobah37@gmail.com</a><br>
                Phone: +2349133381269<br>
                LinkedIn: <a href="https://www.linkedin.com/in/obah-anthony-a07a22237/">Obah Anthony</a><br>
            </p>
        </div><!-- end of container -->
    </section><!-- end of contact section -->

    <!-- core  -->
    <script src="{{ url('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ url('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ url('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Meyawo js -->
    <script src="{{ url('assets/js/meyawo.js') }}"></script>

</body>

</html>
