@extends('layouts.guest')

@section('title', 'Help & Guides - Buy Kitchen Online')

@section('content')
    {{-- Breadcrumb --}}
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Help & Guides</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Help & Guides</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 1) Full-width image section --}}
    <div class="ltn__about-us-area pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <img src="{{ asset('img/blog/1.jpg') }}" alt="Measurement Guide" class="img-fluid w-100" style="max-height: 420px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    {{-- 2) Centered text / intro section (grey) --}}
    <div class="ltn__about-us-area pt-60 pb-60 section-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-20">Getting Your Measurements Right</h2>
                    <p class="mb-10">Getting the measurements right is crucial before placing an order for your dream kitchen or wardrobe. A few extra minutes with a tape measure can save days of rework later.</p>
                    <p class="mb-0">Here is an easy, step-by-step guide to help you measure like a pro before you share your plans with our design team.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 3) Five alternating image/text sections (white) --}}
    <div class="ltn__about-us-area pt-60 pb-60">
        <div class="container">
            @php
                $steps = [
                    [
                        'title' => 'Step 1: Measure Wall-to-Wall Width',
                        'text' => 'Start by measuring the total width of the wall where your units will sit. Note any radiators, windows, doors, or obstructions.',
                        'img' => 'img/blog/2.jpg',
                        'image_left' => true,
                    ],
                    [
                        'title' => 'Step 2: Check Floor-to-Ceiling Height',
                        'text' => 'Measure the height at three points: left, centre, and right. Use the smallest value when planning tall units.',
                        'img' => 'img/blog/3.jpg',
                        'image_left' => false,
                    ],
                    [
                        'title' => 'Step 3: Mark Services & Sockets',
                        'text' => 'Note where electrical sockets, switches, plumbing, and gas points are. Take photos so nothing is missed later.',
                        'img' => 'img/blog/4.jpg',
                        'image_left' => false,
                    ],
                    [
                        'title' => 'Step 4: Allow for Appliances',
                        'text' => 'Measure your appliances or note standard sizes so we can design cabinets that integrate perfectly.',
                        'img' => 'img/blog/5.jpg',
                        'image_left' => false,
                    ],
                    [
                        'title' => 'Step 5: Share Your Plan with Us',
                        'text' => 'Once you have your sketches and measurements ready, send them to our team for a free design consultation.',
                        'img' => 'img/blog/1.jpg',
                        'image_left' => false,
                    ],
                ];
            @endphp

            @foreach ($steps as $step)
                <div class="row align-items-center mb-50">
                    @if ($step['image_left'])
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <img src="{{ asset($step['img']) }}" alt="{{ $step['title'] }}" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-15">{{ $step['title'] }}</h3>
                            <p class="mb-0">{{ $step['text'] }}</p>
                        </div>
                    @else
                        <div class="col-lg-6 order-2 order-lg-1">
                            <h3 class="fw-bold mb-15">{{ $step['title'] }}</h3>
                            <p class="mb-0">{{ $step['text'] }}</p>
                        </div>
                        <div class="col-lg-6 mb-4 mb-lg-0 order-1 order-lg-2">
                            <img src="{{ asset($step['img']) }}" alt="{{ $step['title'] }}" class="img-fluid rounded">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{-- 4) Contact info cards (grey background) --}}
    <div class="ltn__contact-address-area section-bg-1 pt-60 pb-60">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold mb-5">Contact Us</h2>
                    <p class="mb-0">For any queries, please contact uswe'd be happy to help.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('img/icons/10.png') }}" alt="Email Icon">
                        </div>
                        <h3>Email Address</h3>
                        <p>
                            <a href="mailto:admin@bkonline.uk">admin@bkonline.uk</a><br>
                            <a href="mailto:info@bkonline.uk">info@bkonline.uk</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('img/icons/11.png') }}" alt="Phone Icon">
                        </div>
                        <h3>Phone Number</h3>
                        <p>020 8050 5605<br>020 8050 5606</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="{{ asset('img/icons/12.png') }}" alt="Address Icon">
                        </div>
                        <h3>Office Address</h3>
                        <p>44 Gillender Street, Aberfeldy Village,<br>London E14 6RP, United Kingdom</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 5) Guides carousel (white) --}}
    <div class="ltn__product-slider-area ltn__product-gutter pt-60 pb-60">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold mb-10">More Help &amp; Guides</h2>
                    <p class="mb-0">Browse practical tips and ideas to get the best out of your kitchen and wardrobes.</p>
                </div>
            </div>

            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1 ltn__blog-item-3-normal">
@php
    $guides = [
        '7 Home Trends That Will Shape Your Space',
        '10 Brilliant Ways To Decorate Your Home',
        'The Most Inspiring Interior Design Ideas',
        'How To Plan a Smart Storage Kitchen',
        'Wardrobe Layouts That Maximise Space',
        'Lighting Tips For Modern Kitchens',
        'Small Space, Big Storage Solutions',
        'Step-by-Step Guide To Measuring Rooms',
    ];
@endphp
@foreach ($guides as $index => $title)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ltn__blog-item ltn__blog-item-3 mb-30 h-100 d-flex flex-column">
                        <div class="ltn__blog-img">
                            <img src="{{ asset('img/blog/' . ((($index % 5) + 1)) . '.jpg') }}" alt="{{ $title }}">
                        </div>
                        <div class="ltn__blog-brief flex-grow-1 d-flex flex-column">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>Guide</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Tips</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title" style="font-size: 18px;"><a href="#">{{ $title }}</a></h3>
                            <div class="ltn__blog-meta-btn mt-auto">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Updated Regularly</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ route('contact') }}">Ask an Expert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
@endsection
