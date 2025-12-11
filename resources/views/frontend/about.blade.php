@extends('layouts.guest')

@section('title', 'About Us - Kitchen Design')

@section('content')
{{-- Hero section inspired by index-3 slider (single static slide, full viewport height) --}}
<div class="ltn__slider-area ltn__slider-3 section-bg-2" style="padding: 0;">
    <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bg="{{ asset('img/slider/11.jpg') }}" style="min-height: 100vh;">
        <div class="ltn__slide-item-inner text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-center">
                        <div class="slide-item-info">
                            <div class="slide-item-info-inner">
                                <h6 class="slide-sub-title white-color--- mb-15">
                                    <span><i class="fas fa-home"></i></span> Welcome To
                                </h6>
                                <h1 class="slide-title mb-20">Buy Kitchen Online</h1>
                                <div class="slide-brief">
                                    <p>At Buy Kitchen Online, we transform your dreams into reality. We are passionate about making your kitchen
                                        lively and functional, while keeping it affordable and straightforward to buy online.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Two feature blocks bar under hero (overlapping as single card) --}}
<div class="ltn__about-us-area mt--120 pt-0 pb-80 position-relative" style="z-index: 9999;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="white-bg box-shadow-1 d-flex flex-column flex-lg-row" style="border-radius: 6px; overflow: hidden;">
                    <div class="flex-fill d-flex align-items-center p-35" style="background-color:#f5b400; border-right: 2px solid #ffffff;">
                        <div>
                            <h3 class="mb-10 text-uppercase" style="letter-spacing:0.05em;">Get The Best Of Both Worlds</h3>
                            <p class="mb-0">We offer high-quality, factory-finished kitchens at online prices, combined with on-site surveys and expert
                                consultations so you never have to choose between value and service.</p>
                        </div>
                    </div>
                    <div class="flex-fill d-flex align-items-center p-35" style="background-color:#0d5c63;">
                        <div>
                            <h3 class="mb-10 text-uppercase text-white" style="letter-spacing:0.05em;">Time Efficiency</h3>
                            <p class="mb-0 text-white-50">1.5 months of work in a few days. Save time with our streamlined process – what would typically take months, we deliver in days.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Our Story section (card + image) --}}
<div class="ltn__about-us-area section-bg-1 pt-60 pb-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30 mb-lg-0">
                <div class="white-bg box-shadow-1 p-40">
                    <h3 class="mb-20">Our Story</h3>
                    <p>Buy Kitchen Online was founded with the idea of bringing high-quality kitchens to everyone, without the heavy showroom price tag. Whether you're building a new kitchen or upgrading existing units, we make it simple to design and order everything online.</p>
                    <p class="mb-0">From virtual design consultations to precise manufacturing and delivery, our team focuses on giving you beautiful, long-lasting kitchens with a seamless experience from start to finish.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-us-img-wrap about-img-left position-relative">
                    <div class="yellow-bg position-absolute" style="top: 30px; right: -30px; bottom: -30px; left: 30px; background-color:#f5b400; z-index:1;"></div>
                    <div class="position-relative" style="z-index:2;">
                        <img src="{{ asset('img/others/13.png') }}" alt="Our Story" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Core Values (3 cards) --}}
<div class="ltn__feature-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-40">
                <h2 class="fw-bold mb-10">Our Core Values</h2>
            </div>
        </div>
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12 mb-30">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 h-100 d-flex flex-column">
                    <div class="ltn__feature-icon mb-20">
                        <img src="{{ asset('img/icons/icon-img/21.png') }}" alt="Honest &amp; Fair Trade">
                    </div>
                    <div class="ltn__feature-info flex-grow-1 d-flex flex-column">
                        <h3 class="mb-10">Honest &amp; Fair Trade</h3>
                        <p class="mb-0">We focus on giving you clear, transparent information and fair pricing on every kitchen we design, with no hidden extras.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-30">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 h-100 d-flex flex-column">
                    <div class="ltn__feature-icon mb-20">
                        <img src="{{ asset('img/icons/icon-img/22.png') }}" alt="Transparency &amp; Fair Pricing">
                    </div>
                    <div class="ltn__feature-info flex-grow-1 d-flex flex-column">
                        <h3 class="mb-10">Transparency &amp; Fair Pricing</h3>
                        <p class="mb-0">All prices are shown upfront so you can make confident decisions, compare options, and stay in full control of your budget.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-30">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white box-shadow-1 h-100 d-flex flex-column">
                    <div class="ltn__feature-icon mb-20">
                        <img src="{{ asset('img/icons/icon-img/23.png') }}" alt="Sustainability">
                    </div>
                    <div class="ltn__feature-info flex-grow-1 d-flex flex-column">
                        <h3 class="mb-10">Sustainability</h3>
                        <p class="mb-0">We prioritise durable materials and efficient layouts so your kitchen not only looks good, but also stands the test of time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Our Team (image + card) --}}
<div class="ltn__about-us-area section-bg-1 pt-60 pb-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-30 mb-lg-0 order-2 order-lg-1">
                <div class="about-us-img-wrap about-img-left position-relative">
                    <div class="yellow-bg position-absolute" style="top: 30px; left: -30px; bottom: -30px; right: 30px; background-color:#0d5c63; z-index:1;"></div>
                    <div class="position-relative" style="z-index:2;">
                        <img src="{{ asset('img/others/7.png') }}" alt="Our Team" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="white-bg box-shadow-1 p-40">
                    <h3 class="mb-20">Our Team</h3>
                    <p>Behind every finished kitchen is a dedicated team of designers, surveyors, and installers who care about the details as much as you do.</p>
                    <p class="mb-0">From planning your layout to fitting the final handle, our specialists guide you through each step so the whole process feels simple and supported.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- The Buy Kitchen Online Experience (2x3 grid) --}}
<div class="ltn__feature-area pt-60 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-40">
                <h2 class="fw-bold mb-10">The Buy Kitchen Online Experience</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="ltn__feature-item text-center p-30 h-100" style="background-color:#f5b400;">
                    <div class="ltn__feature-icon mb-15">
                        <i class="icon-home"></i>
                    </div>
                    <h4 class="mb-10">Choose From The Comfort Of Your Home</h4>
                    <p class="mb-0">Browse, select, and finalise your kitchen design online without leaving your home.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="ltn__feature-item text-center p-30 h-100" style="background-color:#0d5c63; color:#ffffff;">
                    <div class="ltn__feature-icon mb-15">
                        <i class="icon-settings"></i>
                    </div>
                    <h4 class="mb-10">Smart Design Process</h4>
                    <p class="mb-0">Work with our design team remotely to refine layouts, finishes, and storage solutions.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="ltn__feature-item text-center p-30 h-100" style="background-color:#f5b400;">
                    <div class="ltn__feature-icon mb-15">
                        <i class="icon-star"></i>
                    </div>
                    <h4 class="mb-10">Premium Quality</h4>
                    <p class="mb-0">Factory-built units and premium components that are made to last.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="ltn__feature-item text-center p-30 h-100" style="background-color:#0d5c63; color:#ffffff;">
                    <div class="ltn__feature-icon mb-15">
                        <i class="icon-hand"></i>
                    </div>
                    <h4 class="mb-10">Seamless Service</h4>
                    <p class="mb-0">From first consultation to final installation, we keep everything coordinated for you.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="ltn__feature-item text-center p-30 h-100" style="background-color:#f5b400;">
                    <div class="ltn__feature-icon mb-15">
                        <i class="icon-chart"></i>
                    </div>
                    <h4 class="mb-10">Transparency</h4>
                    <p class="mb-0">Clear breakdowns of what you're paying for, so there are no surprises later.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30">
                <div class="ltn__feature-item text-center p-30 h-100" style="background-color:#0d5c63; color:#ffffff;">
                    <div class="ltn__feature-icon mb-15">
                        <i class="icon-tools"></i>
                    </div>
                    <h4 class="mb-10">Customisation</h4>
                    <p class="mb-0">Tailored layouts, colours, and accessories to match your space and lifestyle.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
