{{-- @extends('layouts.app')

@section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Ben's Resume - Profile HTML Page</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{url('/frontend/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{url('/frontend/css/all.min.css')}}">
     <link rel="stylesheet" href="{{url('/frontend/css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{url('/frontend/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{url('/frontend/css/tooplate-ben-resume-style.css')}}">
<!--
Tooplate 2120 Ben Resume
https://www.tooplate.com/view/2120-ben-resume
-->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">      
        <div class="container">

            <a class="navbar-brand" href="#">
                Ben Resume
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#intro" class="nav-link smoothScroll">Introduction</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Me</a>
                    </li>

                    <li class="nav-item">
                        <a href="#testimonials" class="nav-link smoothScroll">Reviews</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <div class="mt-lg-0 mt-3 mb-4 mb-lg-0" >
                    <a href="#" class="custom-btn btn" download>Download CV</a>
                </div>
            </div>

        </div>
    </nav>


    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

         <div class="container">
            <div class="row">

                  <div class="mx-auto col-lg-5 col-md-5 col-10">
                      <img src="{{url('uploads/')}}/{{$intro->image}}" class="img-fluid" alt="Ben Resume HTML Template">
                  </div>

                   <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                        <div class="hero-text">

                            <h1 class="hero-title">👋 {{$intro->intro}}</h1>

                            <a href="#" class="email-link">
                                {{$intro->email}}
                            </a>
                          
                        </div>
                    </div>

            </div>
        </div>
    </section>


    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">
                    <h3 class="mb-4">This is Ben's Resume</h3>

                    <p>Ben Resume HTML Template is brought to you by <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate website</a>. You can feel free to edit and use this page for your small site. You are allowed to use this HTML template for any kind of purpose.</p>

                    <p>However, please do not re-distribute the downloadable template ZIP file on any template collection website. This is strongly prohibited. Please contact Tooplate for more information.</p>

                    <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                        <li><strong>Full Name :</strong> Ben Wilson </li>

                        <li><strong>Date of Birth:</strong> 26 September 1999</li>

                        <li><strong>Website :</strong> company.co</li>

                        <li><strong>Email :</strong> hello@company.co</li>
                    </ul>
                </div>

                <div class="col-lg-5 mx-auto col-md-6 col-12">
                    <img src="{{url('/frontend/images/true-agency.jpg')}}" class="about-image img-fluid" alt="Ben's Resume HTML Template">
                </div>

            </div>
            <div class="row about-third">
            	<div class="col-lg-4 col-md-4 col-12">
                <h3>Integer volutpat</h3>
                <p>Sed eu risus tincidunt, finibus dolor non, gravida ex. Donec lacinia mi nec erat tempus, vel consectetur ante scelerisque. Ut blandit, risus in venenatis ultricies, lacus tellus fermentum.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <h3>Mauris semper</h3>
                <p>Cras et nisl vestibulum, accumsan elit sed, pretium enim. Vestibulum in condimentum magna. Maecenas quam magna, iaculis eu turpis et, commodo pulvinar leo.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                <h3>Integer id neque</h3>
                <p>Duis at mollis leo, venenatis congue ex. Cras urna dui, gravida euismod lectus et, cursus tempor nulla. Praesent at turpis quis ex tristique gravida quis eget eros.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- TESTIMONIAL -->
     <section class="testimonials section-padding" id="testimonials">
          <div class="container">
               <div class="row">

                    <div class="col-12">
                        <h3 class="mb-5 text-center">What People say</h3>

                        <div class="owl-carousel owl-theme" id="testimonials-carousel">
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{url('/frontend/images/testimonials/testimonial-image01.jpg')}}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                        <h6 class="mb-0">Ben</h6>
                                        <span>Art Director</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{url('/frontend/images/testimonials/testimonial-image02.jpg')}}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                        <h6 class="mb-0">Marie</h6>
                                        <span>Marketing Consultant</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{url('/frontend/images/testimonials/testimonial-image03.jpg')}}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                        <h6 class="mb-0">Jen</h6>
                                        <span>Product Manager</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{url('/frontend/images/testimonials/testimonial-image04.jpg')}}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>

                                        <h6 class="mb-0">Wilson</h6>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

               </div>
          </div>
     </section>


     <!-- FAQ -->
     <section class="faq section-padding">
        
        <div class="container">
            
            <div class="row">

                <div class="col-lg-12 col-12">

                    <h3 class="mb-5">Frequently Asked Questions</h3>

                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Are those HTML templates absolutely free for any kind of usage?
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Yes, they are 100% free and there is no hidden charge.</p>

                            <p>They can be used for your commercial websites.</p>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Can I use them as a CMS theme or a part of website builder?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Yes, you can use them.</p>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              I cannot find a suitable HTML template. Can I request new template?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Yes, please tell us what you need. We will try our best to fulfill it.</p>
                          </div>
                        </div>
                      </div>

                    <div class="card">
                        <div class="card-header" id="headingFour">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Can I redistribute your templates?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body">
                            <p>No, this is totally NOT allowed. Please do not redistribute our HTML templates.</p>
                          </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              How do I support Tooplate?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                          <div class="card-body">
                            <p>Please spread a word about Tooplate website to your colleagues and friends.</p>
                          </div>
                        </div>
                    </div>

                    <span class="faq-info-text">Please send us a message if you have anything to say. Send an email message to <strong>contact (at) tooplate (dot) com</strong></span>

                </div>

           	 </div><!-- col -->
        	</div><!-- row -->
        </div><!-- container -->
    </section>


     <section class="contact section-padding pt-0" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-12">
            <form action="#" method="get" class="contact-form webform"  role="form">
                
                <div class="form-group d-flex flex-column-reverse">
                    <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="Your Name">

                    <label for="cf-name" class="webform-label">Full Name</label>
                </div>

                <div class="form-group d-flex flex-column-reverse">
                    <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="Your Email">

                    <label for="cf-email" class="webform-label">Your Email</label>
                </div>

                <div class="form-group d-flex flex-column-reverse">
                    <textarea class="form-control" rows="5" name="cf-message" id="cf-message" placeholder="Your Message"></textarea>

                    <label for="cf-message" class="webform-label">Message</label>
                </div>

                <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
            </form>
          </div>

            <div class="mx-auto col-lg-4 col-md-6 col-12">
                <h3 class="my-4 pt-4 pt-lg-0">Say hello</h3>

                <p class="mb-1">010-020-0340</p>

                <p>
                    <a href="#">
                        hello@company.co
                    <i class="fas fa-arrow-right custom-icon"></i>
                    </a>
                </p>

                <ul class="social-links mt-2">
                    <li><a href="https://fb.com/tooplate" rel="noopener" class="fab fa-facebook"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-twitter"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-instagram"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-linkedin"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                </ul>
                
              <p class="copyright-text mt-5 pt-3">Copyright &copy; 2020 Ben Resume Page</p>
                
                <p>Design: <a href="https://www.tooplate.com" title="free HTML templates" target="_blank">Tooplate</a></p>
            </div>

        </div>
      </div>
    </section>
     <!-- SCRIPTS -->
     <script src="{{url('/frontend/js/jquery.min.js')}}"></script>
     <script src="{{url('/frontend/js/bootstrap.min.js')}}"></script>
     <script src="{{url('/frontend/js/smoothscroll.js')}}"></script>
     <script src="{{url('/frontend/js/owl.carousel.min.js')}}"></script>
     <script src="{{url('/frontend/js/custom.js')}}"></script>

</body>
</html>

{{-- @endsection --}}