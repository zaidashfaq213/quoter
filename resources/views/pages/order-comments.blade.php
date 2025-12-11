@extends('layouts.guest')

@section('title', 'Order Comments | Buy Kitchen Online')

@section('meta_description', 'Read customer reviews and comments about our kitchen design and installation services.')

@section('content')
    {{-- Breadcrumb --}}
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-1 ltn__breadcrumb-color-white--- bg-overlay-theme-black-90 bg-image pt-35 pb-35" data-bg="img/bg/4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Order Comments</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Order Comments</li>
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

    {{-- Full-width Image with Text Overlay Section --}}
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

    <!-- SHOP SECTION START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <!-- ltn__product-item -->
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('img/product-3/1.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badg">For Rent</li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="#">Modern Kitchen Design</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> London, UK</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>3 </span>Bed</li>
                                        <li><span>2 </span>Bath</li>
                                        <li><span>1200 </span>Sq Ft</li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span>$34,900<label>/Month</label></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__product-item -->
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('img/product-3/2.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badg">For Sale</li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="#">Luxury Kitchen Suite</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> Manchester, UK</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>4 </span>Bed</li>
                                        <li><span>3 </span>Bath</li>
                                        <li><span>1500 </span>Sq Ft</li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span>$45,900<label>/Month</label></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__product-item -->
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('img/product-3/3.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badg">For Rent</li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="#">Contemporary Kitchen</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> Birmingham, UK</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>2 </span>Bed</li>
                                        <li><span>1 </span>Bath</li>
                                        <li><span>800 </span>Sq Ft</li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span>$28,900<label>/Month</label></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__product-item -->
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('img/product-3/4.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badg">For Rent</li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="#">Traditional Kitchen</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> Liverpool, UK</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>3 </span>Bed</li>
                                        <li><span>2 </span>Bath</li>
                                        <li><span>1100 </span>Sq Ft</li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span>$32,900<label>/Month</label></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__product-item -->
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('img/product-3/5.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badg">For Sale</li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="#">Industrial Kitchen</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> Glasgow, UK</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>4 </span>Bed</li>
                                        <li><span>2 </span>Bath</li>
                                        <li><span>1600 </span>Sq Ft</li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span>$52,900<label>/Month</label></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ltn__product-item -->
                        <div class="col-xl-6 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('img/product-3/6.jpg') }}" alt="#"></a>
                                    <div class="real-estate-agent">
                                        <div class="agent-img">
                                            <a href="#"><img src="{{ asset('img/blog/author.jpg') }}" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-badge">
                                        <ul>
                                            <li class="sale-badg">For Rent</li>
                                        </ul>
                                    </div>
                                    <h2 class="product-title"><a href="#">Minimalist Kitchen</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-pin"></i> Edinburgh, UK</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>2 </span>Bed</li>
                                        <li><span>1 </span>Bath</li>
                                        <li><span>900 </span>Sq Ft</li>
                                    </ul>
                                    <div class="product-hover-action">
                                        <ul>
                                            <li>
                                                <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                    <i class="far fa-heart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_compare_modal">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span>$38,900<label>/Month</label></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <h3 class="mb-10">Advance Information</h3>
                        <label class="mb-30"><small>About 9,620 results (0.62 seconds) </small></label>
                        <!-- Advance Information widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">Kitchen Type</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Modern
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,924</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Traditional
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,610</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Contemporary
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,912</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Minimalist
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">1,845</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Industrial
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">1,234</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget">
                            <h4 class="ltn__widget-title">Price Filter</h4>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span>
                                        <input type="text" name="price" placeholder="Add Your Price Here" />
                                    </div>
                                    <button type="button" class="btn">Filter</button>
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <!-- Size Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title">Kitchen Size</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Small (Under 800 sq ft)
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,145</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Medium (800-1200 sq ft)
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">4,876</span>
                                </li>
                                <li>
                                    <label class="checkbox-item">Large (1200+ sq ft)
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">2,599</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->

    <!-- TESTIMONIALS SECTION START -->
    <div id="testimonials-section" class="ltn__testimonial-area section-bg-1 pt-90 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-40">
                    <h3 class="text-uppercase fw-bolder text-dark mb-10">FACT, EVERYONE LOVES US</h3>
                    <p>Real experiences from homeowners who trusted Buy Kitchen Online with their dream kitchens.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"I discovered BKO Kitchen through a colleague. From the free consultation call to final installation of my shaker kitchen, everything was outstanding. Highly recommended!"</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Jamie</h5>
                                <small>Shaker Kitchen Installation</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"I ordered a grey sink, tap and tall L-shaped corner unit. Delivery was on time and quality was better than expected, with very reasonable prices. Perfect blend of quality and affordability."</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Sarah</h5>
                                <small>Components Order</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4 box-shadow-1 bg-white">
                        <div class="ltn__testimoni-info">
                            <p>"BKO transformed my small space into a stunning handleless kitchen. Their precision, design sense and installation team made the whole process smooth and stress-free."</p>
                        </div>
                        <div class="ltn__testimoni-info-inner d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="mb-0">Ahmed</h5>
                                <small>Handleless Kitchen</small>
                            </div>
                            <div class="product-ratting">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS SECTION END -->

    <!-- FAQS SECTION START -->
    <div id="faqs-section" class="ltn__faq-area pt-90 pb-90 mb-100">
        <div class="container">
            <div class="row justify-content-center mb-40">
                <div class="col-lg-8 col-12 text-center">
                    <h3 class="text-uppercase fw-bolder text-dark mb-10">Frequently Asked Questions</h3>
                    <p>Answers to common questions about affordable units, bespoke designer kitchens and our process.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="bkoFaqAccordion">
                            <!-- card 1 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq1" aria-expanded="false">
                                    What is the difference between an affordable kitchen unit and a custom kitchen unit?
                                </h6>
                                <div id="faq1" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>An affordable kitchen unit offers budget-friendly solutions without compromising quality. Custom kitchen units are tailor-made to your style, space and preferences, usually at a higher price point.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 2 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq2" aria-expanded="false">
                                    How is a bespoke designer kitchen different from a standard kitchen?
                                </h6>
                                <div id="faq2" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Standard kitchens come in preset sizes and designs. A bespoke designer kitchen is custom-made for you, including layout, materials and overall aesthetic tailored to your home.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 3 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title"indr-toggle="collapse" data-target="#faq3" aria-expanded="false">
                                    Can Iresso use affordable kitchen units for a renovation?
                                </h6>
                                <div id="faq3" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes. Affordable kitchen units are ideal when renovating on a budget. At Buy Kitchen Online even our budget-friendly options use quality materials and craftsmanship.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 4 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq4" aria-expanded="false">
                                    What is the process of designing custom kitchen units?
                                </h6>
                                <div id="faq4" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>We start with an in-depth consultation, discuss your style and functionality needs, measure your space and then create a unique design proposal for your kitchen.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 5 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq5" aria-expanded="false">
                                    Can a designer kitchen increase the value of my property?
                                </h6>
                                <div id="faq5" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes. A well-designed luxury kitchen adds both aesthetic appeal and functionality, which can significantly increase the value and desirability of your property.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 6 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq6" aria-expanded="false">
                                    Are there any affordable kitchen units available that offer customization?
                                </h6>
                                <div id="faq6" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes, Buy Kitchen Online allows you to customize a budget-friendly kitchen unit to some extent. You get a personalized kitchen at an affordable price.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 7 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq7" aria-expanded="false">
                                    How much does a designer kitchen unit cost?
                                </h6>
                                <div id="faq7" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>The entire cost of a designer kitchen depends on many different factors like materials, size, and design complexity. However, Buy Kitchen Online offers premium quality at affordable prices for various budgets.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 8 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq8" aria-expanded="false">
                                    Can Buy Kitchen Online design a custom kitchen unit to fit my small physical space?
                                </h6>
                                <div id="faq8" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Absolutely! The experts at Buy Kitchen Online specialize in building kitchen units according to your available space and lifestyle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 9 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq9" aria-expanded="false">
                                    Does Buy Kitchen Online offer any flexible financing options for kitchen units?
                                </h6>
                                <div id="faq9" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Yes, Buy Kitchen Online aims to make your dream kitchen a reality by offering different financing options. Please get in touch with us for any further details.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 10 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq10" aria-expanded="false">
                                    Which materials are used to make a kitchen unit?
                                </h6>
                                <div id="faq10" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>The most popular materials include stainless steel, quartz, and wood (such as oak, maple, and cherry). Buy Kitchen Online helps you in choosing the perfect material according to your preference.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card 11 -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-toggle="collapse" data-target="#faq11" aria-expanded="false">
                                    Is a bespoke designer kitchen worth it?
                                </h6>
                                <div id="faq11" class="collapse" data-parent="#bkoFaqAccordion">
                                    <div class="card-body">
                                        <p>Bespoke kitchens are worth it if you prefer customized, high-quality, long-lasting kitchens. The price may be higher than a standard kitchen, but the advantages of having a kitchen custom-made for your space and style are worth the investment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQS SECTION END -->

@endsection
