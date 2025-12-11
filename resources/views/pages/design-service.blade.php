@extends('layouts.guest')

@section('title', 'Virtual Design Service - Buy Kitchen Online')

@section('content')
    {{-- 1) Hero image + heading/text --}}
    <div class="ltn__about-us-area pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-12">
                    <div class="position-relative">
                        <img src="{{ asset('images/homepage.jpeg') }}" alt="Virtual Design Service" class="img-fluid w-100" style="max-height: 460px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__about-us-area pt-40 pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="fw-bold mb-15">Virtual Design Service</h2>
                    <p class="mb-0">At Buy Kitchen Online we want to make planning your new kitchen as easy as possible. Our Virtual Design
                        Service lets you share your ideas, measurements, and inspiration with our designers from the
                        comfort of your home so we can create a tailored layout that works perfectly for your space.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 2) Left image, right form --}}
    <div class="ltn__contact-message-area section-bg-1 pt-60 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <img src="{{ asset('img/others/virtual-design-form.jpg') }}" alt="Request a Design Meeting" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <div class="ltn__form-box contact-form-box box-shadow white-bg">
                        <h4 class="title-2 mb-20">Request a Design Meeting</h4>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="first_name" placeholder="First Name *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" name="last_name" placeholder="Surname *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" name="email" placeholder="Email *">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-phone ltn__custom-icon">
                                        <input type="text" name="phone" placeholder="Phone Number *">
                                    </div>
                                </div>
                            </div>
                            <div class="input-item input-item-textarea ltn__custom-icon">
                                <textarea name="message" placeholder="Tell us about your project, measurements, or existing plans"></textarea>
                            </div>
                            <div class="btn-wrapper mt-0">
                                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Request a Design Appointment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
