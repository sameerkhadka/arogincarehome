<!DOCTYPE html>
<html lang="en">
<head>
   @yield('meta')
    <title>{{setting('site.title')}}</title>

    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">

    
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">

    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    
</head>
<body>
    
    <header id="header">
        <div class="top-header">
            <div class="container">
                <div class="th-wrap">
                    <ul>
                        <li>
                            <a href="mailto:info@aroginhomecare.com">
                                <i class="fas fa-info"></i> {{setting('contact.email')}}
                            </a>
                        </li>

                        <li>
                            <a href="tel:+01-4423423">
                                <i class="fas fa-phone-alt"></i> {{setting('contact.footer')}}
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{voyager::image(setting('site.logo'))}}" alt="Arogin Home Care">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div id="navbarNavDropdown" class="navbar-collapse collapse">
                        <ul class="mr-auto"></ul>
                        <ul class="navbar-nav">
                              
                            <li class="nav-item">
                                <a class="nav-link" href="#">Care Services</a>

                                <div class="sub-menu">
                                    <ul>
                                        @foreach($careservices as $careservice)
                                            <li><a href="{{route('services', $careservice->slug)}}">{{$careservice->title}}</a></li>
                                        @endforeach
                                        {{-- <li><a href="stroke-care.html">Stroke Care & Rehabilitation</a></li>
                                        <li><a href="dementia-care.html">Dementia & Alzheimer’s Care</a></li>
                                        <li><a href="day-care.html">Residential & Day care service</a></li>
                                        <li><a href="palliative-care.html">Palliative Care</a></li>
                                        <li><a href="orthology-care.html">Ortho & Spinal Injury Care</a></li>
                                        <li><a href="lab-services.html">Lab Services</a></li>
                                        <li><a href="pharmacy.html">Pharmacy</a></li> --}}
                                    </ul>
                                </div>
                            </li>
                            
                            @php $physiotherapy = \App\CareService::where('id','9')->first(); @endphp
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('services', $physiotherapy->slug)}}">Physiotherapy Services</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="#">Resources</a>

                                <div class="sub-menu">
                                    <ul>
                                        <li><a href="{{route('blogs')}}">Blogs</a></li>
                                        <li><a href="{{route('main.faq')}}">FAQs</a></li>
                                        <li><a href="{{route('tip')}}">Tips</a></li>
                                    </ul>
                                </div>

                            </li>

    
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('events')}}">Events</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="#">Who we are</a>

                                <div class="sub-menu">
                                    <ul>
                                        <li><a href="{{route('story')}}">Our Story</a></li>
                                        <li><a href="{{route('our-team')}}">Our Team</a></li>
                                        <li><a href="{{route('testimonial')}}">Our Testimonials</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact us</a>
                            </li>
     
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    @yield('body')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">  
                    <div class="footer-logo">
                        <img src="{{voyager::image(setting('site.footer_logo'))}}" alt="">
    
                    </div>

                    <div class="ft-social">
                            <a href="{{setting('social-media.facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                            <a href="{{setting('social-media.instagram')}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{setting('social-media.twitter')}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{setting('social-media.linked')}}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-md-2 offset-md-3">
                    <div class="quick-links">
                        <a href="{{route('contact')}}">Contact Us</a>
                        <a href="{{route('story')}}">Our Story</a>
                        <a href="{{route('main.faq')}}">FAQ</a>
                        <a href="{{route('blogs')}}">Blogs</a>
                        <a href="{{route('events')}}">Events</a>
                    </div>
                </div>

                <div class="col-md-3 offset-md-1">
                    <div class="footer-contact">
                        <a href="mailto:{{setting('contact.email')}}">
                            {{setting('contact.email')}}
                        </a>
                 

                   
                        <a href="tel:{{setting('contact.footer')}}">
                             {{setting('contact.footer')}}
                        </a>

                        <div class="location">
                            <p>{{setting('contact.footer_location')}}</p>
                        </div>
                    </div>
               
                </div>
                
                <div class="col-md-12">
                    <div class="cpy-rights">
                        <p>Copyright © Arogin Care Home.</p>
                        <p>Powered by <a href="">Hue Shine</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   

 
    <script src="{{asset('js/jquery.min.js')}}"></script>
    @yield('toastr')
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @yield('popup')
</body>
</html>