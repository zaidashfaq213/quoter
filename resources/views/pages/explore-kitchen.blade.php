@extends('layouts.guest')

@section('title', 'Explore Kitchen Designs | Buy Kitchen Online')

@section('meta_description', 'Explore our wide range of kitchen designs and styles. Find the perfect kitchen for your home with professional design services.')

@section('content')
    {{-- Breadcrumb Section from about.html --}}
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Explore Kitchen</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Explore Kitchen</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Left Heading + Right Form Section --}}
    <div class="ltn__about-us-area pt-60 pt-md-80 pb-60 pb-md-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2 mb-30">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Discover</h6>
                            <h1 class="section-title">Explore Our Kitchen Collection</h1>
                        </div>
                        <p>Transform your cooking space with our premium kitchen designs. From modern minimalistic to traditional styles, we have the perfect kitchen solution for every home.</p>
                        <p>Our expert designers work with you to create a functional and beautiful kitchen that meets your specific needs and budget.</p>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li>Modern & Traditional Designs</li>
                            <li>Customizable Solutions</li>
                            <li>Premium Quality Materials</li>
                            <li>Professional Installation</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-img-wrap about-img-right">
                        <div class="bg-white box-shadow-1 p-3 p-lg-4 rounded mb-4">
                            <div class="text-center mb-3">
                                <h5 class="text-uppercase" style="color: #333; font-weight: 600;">For free survey and quote <span style="color:#ffc107;">call us now!</span></h5>
                                <a href="tel:02080505605" class="btn btn-yellow" style="font-weight: 600; background-color: #ffc107; padding: 10px 20px; color: black;">
                                    <i class="fas fa-phone pe-1"></i> 020 805 05605
                                </a>
                                <h6 class="text-center my-2">OR</h6>
                                <h5 class="text-uppercase" style="color: #333;">Book a free consultation now!</h5>
                            </div>
                            <form action="{{ route('contact') }}" method="POST" class="row">
                                @csrf
                                <div class="col-12 mb-2">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="name" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="input-item input-item-date ltn__custom-icon">
                                        <input type="datetime-local" name="call_time" placeholder="Call Us At" class="form-control" style="height: 50px;">
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <input type="text" name="message" placeholder="Enter your message">
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="btn-wrapper mt-0">
                                        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Full-width Image with Text Overlay Section (EXACT – UNTOUCHED) --}}
    <div class="ltn__slider-area pt-60 pt-md-80 pb-60 pb-md-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="position-relative overflow-hidden rounded-3" style="max-height: 320px;">
                        <img src="{{ asset('images/homepage.jpeg') }}" alt="J-Pull Kitchen" class="img-fluid w-100" style="height: 300px; object-fit: cover;">
                        <div class="position-absolute start-0" style="top: 18px; left: 18px; max-width: 380px;">
                            <div style="background: rgba(255,255,255,0.7); backdrop-filter: blur(6px); padding: 14px 18px; border-radius: 10px;">
                                <h3 class="fw-bold mb-1 text-dark" style="font-size: 22px;">Fingerprints, Scratches, &amp; Clutter?</h3>
                                <h5 class="fw-bold mb-1 text-dark" style="font-size: 16px;">J-Pull 22's Handleless Design Keeps Your Kitchen Pristine.</h5>
                                <p class="mb-0 text-dark" style="font-size: 14px;">Smooth, easy-to-clean surfaces with a modern handleless look, perfect for busy family kitchens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SLIDER AREA (PASTED EXACTLY — LAST) --}}
    <div class="ltn__slider-area ltn__slider-11  ltn__slider-11-slide-item-count-show--- ltn__slider-11-pagination-count-show--- section-bg-1">
        <div class="ltn__slider-11-inner">
            <div class="ltn__slider-11-active">
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                    <div class="ltn__slide-item-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                            <h1 class="slide-title animated ">Search and Find <br><span>Luxury</span> House</h1>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-item-img">
                                        <img src="img/slider/61.jpg" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Kitchen Showcase Cards Section (6 cards, 2 per row) --}}
    <div class="ltn__product-area pt-60 pt-md-80 pb-60 pb-md-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center mb-50">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Kitchen Collection</h6>
                        <h1 class="section-title">Explore Our Kitchen Designs</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/product-3/1.jpg') }}" alt="Kitchen Design 1"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">Modern</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="#">Modern Kitchen Design</a></h4>
                            <div class="product-price">
                                <span>Starting from £2,999</span>
                            </div>
                            <div class="product-description">
                                <p>Sleek and contemporary design with minimalist features and premium materials.</p>
                            </div>
                            <div class="btn-wrapper mt-3">
                                <a href="{{ route('contact') }}" class="btn theme-btn-1 btn-effect-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/product-3/2.jpg') }}" alt="Kitchen Design 2"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green---">Traditional</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="#">Traditional Kitchen</a></h4>
                            <div class="product-price">
                                <span>Starting from £3,499</span>
                            </div>
                            <div class="product-description">
                                <p>Classic elegance with timeless design elements and handcrafted finishes.</p>
                            </div>
                            <div class="btn-wrapper mt-3">
                                <a href="{{ route('contact') }}" class="btn theme-btn-1 btn-effect-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/product-3/3.jpg') }}" alt="Kitchen Design 3"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">Luxury</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="#">Luxury Kitchen</a></h4>
                            <div class="product-price">
                                <span>Starting from £5,999</span>
                            </div>
                            <div class="product-description">
                                <p>High-end materials and sophisticated design for the ultimate kitchen experience.</p>
                            </div>
                            <div class="btn-wrapper mt-3">
                                <a href="{{ route('contact') }}" class="btn theme-btn-1 btn-effect-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/product-3/4.jpg') }}" alt="Kitchen Design 4"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">Compact</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="#">Compact Kitchen</a></h4>
                            <div class="product-price">
                                <span>Starting from £1,999</span>
                            </div>
                            <div class="product-description">
                                <p>Space-efficient design perfect for smaller homes and apartments.</p>
                            </div>
                            <div class="btn-wrapper mt-3">
                                <a href="{{ route('contact') }}" class="btn theme-btn-1 btn-effect-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/product-3/5.jpg') }}" alt="Kitchen Design 5"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green">Family</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="#">Family Kitchen</a></h4>
                            <div class="product-price">
                                <span>Starting from £4,299</span>
                            </div>
                            <div class="product-description">
                                <p>Spacious and practical design perfect for busy family life.</p>
                            </div>
                            <div class="btn-wrapper mt-3">
                                <a href="{{ route('contact') }}" class="btn theme-btn-1 btn-effect-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="ltn__product-item ltn__product-item-4 text-center">
                        <div class="product-img">
                            <a href="#"><img src="{{ asset('img/product-3/6.jpg') }}" alt="Kitchen Design 6"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge bg-green---">Custom</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <h4 class="product-title"><a href="#">Custom Kitchen</a></h4>
                            <div class="product-price">
                                <span>Contact for Price</span>
                            </div>
                            <div class="product-description">
                                <p>Bespoke design tailored to your specific requirements and preferences.</p>
                            </div>
                            <div class="btn-wrapper mt-3">
                                <a href="{{ route('contact') }}" class="btn theme-btn-1 btn-effect-1">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- START YOUR JOURNEY SECTION -->
    <div class="ltn__about-us-area pt-115 pb-115 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12" style="z-index: 10;">
                    <h3 class="text-start text-dark fw-bold" style="text-decoration: underline;">
                        START YOUR JOURNEY WITH Buy Kitchen Online
                    </h3>
                    <p class="max-description suggestion">
                        Book your free consultation today and take the first step toward your dream kitchen. Whether virtually or with an on-site survey, we are here to guide you every step of the way.
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style="z-index: 10;">
                    <div class="d-flex justify-content-center">
                        <img height="180px" width="180px" class="img-fluid bg-transparent" src="{{ asset('img/icons/15.png') }}" alt="Kitchen Consultation">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area ltn__category-item-5-bg pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center mb-50">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Kitchen Features</h6>
                        <h1 class="section-title">Complete Kitchen Solutions</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="{{ route('contact') }}">
                            <span class="category-icon"><i class="flaticon-car"></i></span>
                            <span class="category-title">Modern Design</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="{{ route('contact') }}">
                            <span class="category-icon"><i class="flaticon-swimming"></i></span>
                            <span class="category-title">Smart Storage</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="{{ route('contact') }}">
                            <span class="category-icon"><i class="flaticon-secure-shield"></i></span>
                            <span class="category-title">Premium Quality</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__category-item ltn__category-item-5 text-center">
                        <a href="{{ route('contact') }}">
                            <span class="category-icon"><i class="flaticon-stethoscope"></i></span>
                            <span class="category-title">Expert Service</span>
                            <span class="category-btn"><i class="flaticon-right-arrow"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-7) -->
    <div class="ltn__testimonial-area pt-115 pb-115 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Why People Love Us</h6>
                        <h1 class="section-title">Clients Feedback</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                Amazing kitchen design service! They transformed our small space into a beautiful functional kitchen. The team was professional and delivered exactly what we wanted.</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset('img/testimonial/1.jpg') }}" alt="Sarah Johnson">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Sarah Johnson</h5>
                                    <label>Homeowner</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                Excellent craftsmanship and attention to detail. Our new kitchen looks stunning and the installation was seamless. Highly recommend their services!</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset('img/testimonial/2.jpg') }}" alt="Michael Brown">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Michael Brown</h5>
                                    <label>Property Developer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__testimonial-item ltn__testimonial-item-7">
                        <div class="ltn__testimoni-info">
                            <p><i class="flaticon-left-quote-1"></i> 
                                From design to installation, the entire process was smooth. The team understood our needs perfectly and created our dream kitchen within budget.</p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset('img/testimonial/3.jpg') }}" alt="Emma Davis">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h5>Emma Davis</h5>
                                    <label>Interior Designer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

@endsection
