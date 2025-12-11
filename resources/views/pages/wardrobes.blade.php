@extends('layouts.guest')

@section('title', 'Wardrobes - Buy Kitchen Online')

@section('content')
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Wardrobes</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Wardrobes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__product-area section-bg-1 pt-60 pt-md-80 pb-60 pb-md-80">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold mb-10">Explore Our Wardrobe Collection</h2>
                    <p class="mb-0">Modern, space-optimised wardrobes designed to keep every outfit organised and within reach.</p>
                </div>
            </div>

            <div class="row">
@php
    $wardrobes = [
        'Elegant Oasis', 'Rustic Summit', 'Modern Sanctuary', 'Classic Vista',
        'Urban Chic', 'Cozy Haven', 'Skyline Suite', 'Timber Retreat',
        'Velvet Luxe', 'Nordic Calm', 'Heritage Charm', 'Contemporary Edge',
        'Marble Grace', 'Soft Minimal', 'Studio Smart', 'Panorama Wardrobe',
        'Loft Haven', 'Serene Storage', 'Signature Suite', 'Prime Organizer',
    ];
@endphp
@foreach ($wardrobes as $index => $name)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="ltn__blog-item ltn__blog-item-3 h-100 d-flex flex-column">
                        <div class="ltn__blog-img">
                            <img src="{{ asset('img/blog/' . ((($index % 5) + 1)) . '.jpg') }}" alt="{{ $name }}">
                        </div>
                        <div class="ltn__blog-brief flex-grow-1 d-flex flex-column">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>Wardrobe Range</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Design</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title" style="font-size: 18px;"><a href="#">{{ $name }}</a></h3>
                            <div class="ltn__blog-meta-btn mt-auto">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Made to Measure</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ route('contact') }}">View Details</a>
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
