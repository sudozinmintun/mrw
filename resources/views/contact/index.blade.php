@extends('layouts.app')
@section('title', '- Contact Us')
@section('content')

    <section class="pb-0">
        <div class="container position-relative z-index-9">
            <div class="row">
                <div class="col-xl-5 mb-1-6 mb-xl-0 wow fadeIn" data-wow-delay="200ms">
                    <div class="pe-xl-1-9">
                        <div class="section-title left mb-1-9">
                            <span class="sm-title">Contact Us</span>
                            <h2 class="mb-0 h1 mt-2">Write Us Any Message</h2>
                        </div>
                        <p class="mb-1-9">
                            Alternatively, you may contact us by filling up the contact form. Our team will response you
                            shortly.
                        </p>
                        <ul class="social-icon-style3 ps-0">
                            <li class="me-1">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="me-1"><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li class="me-1"><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li class="me-0"><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeIn" data-wow-delay="400ms">
                    <form class="row g-4 needs-validation" autocomplete="off" action="{{ route('contact.store') }}"
                        method="POST" id="create-form">
                        @csrf
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" value="{{ old('name') }}"
                                    placeholder="Your Name*" name="name">
                                @error('name')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Phone</label>
                                <input class="form-control" type="text" value="{{ old('phone') }}"
                                    placeholder="Your Phone*" name="phone">
                                @error('phone')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-input-group">
                                <label for="name">Email</label>
                                <input class="form-control" name="email" type="text" value="{{ old('email') }}"
                                    placeholder="Email Address">
                                @error('email')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="custom-input-group">
                                <label for="name">Subject</label>
                                <input class="form-control" name="subject" type="text" value="{{ old('subject') }}"
                                    placeholder="Subject*">
                                @error('subject')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="name">Message</label>
                            <textarea class="form-control" cols="10" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="quform-submit-inner">
                                <button class="butn border-0" type="submit">
                                    <span>Send Message</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="pb-lg-0 overflow-visible">
        <div class="container position-relative z-index-9">
            <div class="row border-lg-top">

                <div class="col-md-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                    <div class="border-lg-end h-100 py-lg-7">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="card-icon">
                                    <i class="ti-mobile text-primary display-10"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="h5">Phone Number</h3>
                                <p class="mb-0">
                                    <a href="tel:09-798488514">
                                        09-798488514
                                    </a>
                                    <br>
                                    <a href="tel:09-430 938 64">
                                        09-430 938 64
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-1-9 mb-lg-0 wow fadeIn" data-wow-delay="400ms">
                    <div class="border-lg-end h-100 py-lg-7">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="card-icon">
                                    <i class="ti-location-pin text-primary display-10"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="h5">Location</h3>
                                <p class="mb-0 w-lg-80">
                                    420(A), 5th Floor, Thu Mingalar Street,
                                    7 Ward, South Okkalarpa Township, Yangon, Myanmar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="600ms">
                    <div class="h-100 py-lg-7">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <div class="card-icon">
                                    <i class="ti-email text-primary display-10"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="h5">Email Address</h3>
                                <p class="mb-0">
                                    <a href="mailto:178kyawmyo@gmail.com">
                                        178kyawmyo@gmail.com
                                    </a>

                                    <a href="mailto:mediumwayriver@gmail.com">
                                        mediumwayriver@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/bg/bg-04.png') }}" class="position-absolute bottom-0 right" alt="...">
    </section>


@endsection
