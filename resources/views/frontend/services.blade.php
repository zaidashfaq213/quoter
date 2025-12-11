@extends('layouts.guest')

@section('title', 'Our Services - Kitchen Design')

@section('content')
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" style="background-image: url({{ asset('img/bg/14.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Our Services</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('components.features-grid')

<div class="ltn__about-us-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center mb-50">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">What We Do</h6>
                    <h1 class="section-title">Complete Kitchen Solutions</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">We offer comprehensive kitchen design and installation services to transform your space. Contact us today for a free consultation.</p>
            </div>
        </div>
    </div>
</div>
@endsection
