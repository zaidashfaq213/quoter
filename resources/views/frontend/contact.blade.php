@extends('layouts.guest')

@section('title', 'Contact Us - Kitchen Design')

@section('content')
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" style="background-image: url({{ asset('img/bg/14.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Contact Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ route('home') }}"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('img/icons/10.png') }}" alt="Icon">
                    </div>
                    <h3>Email Address</h3>
                    <p>info@kitchendesign.com <br>
                        support@kitchendesign.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('img/icons/11.png') }}" alt="Icon">
                    </div>
                    <h3>Phone Number</h3>
                    <p>+012-345-6789 <br> +012-345-6780</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('img/icons/12.png') }}" alt="Icon">
                    </div>
                    <h3>Office Address</h3>
                    <p>London, United Kingdom</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__contact-message-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Get A Free Quote</h4>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-subject ltn__custom-icon">
                                    <input type="text" name="subject" placeholder="Enter subject">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="message" placeholder="Enter message"></textarea>
                        </div>
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
