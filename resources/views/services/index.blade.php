@extends('layouts.app')
@section('content')
    <section class="page-title-section bg-img cover-background top-position1 secondary-overlay" data-overlay-dark="7"
        data-background="{{ asset('assets/img/banner/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="position-relative">
                        <h1>Our Services</h1>
                    </div>
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="#!">Our Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-secondary">
        <div class="container">
            <div class="section-title mb-1-9 mb-md-6 text-center wow fadeIn" data-wow-delay="200ms">
                <span class="sm-title">What We Do</span>
                <h2 class="mb-0 text-white display-16 display-sm-13 display-md-10 display-lg-8 display-xl-6">Services That
                    Help You Grow.</h2>
            </div>
            <div class="row gx-xxl-5 mt-n1-9">

                @foreach ($services as $service)
                    <div class="col-md-6 col-xl-3 mt-1-9 wow fadeIn" data-wow-delay="400ms">
                        <div class="card-style1">
                            <div class="card-main-img">
                                <div class="card-border"></div>
                                <div class="card-icon">
                                    <img src="{{ asset('assets/img/icons/03.png') }}" alt="...">
                                </div>
                                <div class="card-image">
                                    <img src="{{ $service->photo ?? '' }}" alt="..." style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 5px;">
                                </div>
                            </div>
                            <div class="card-content">
                                <h3 class="mb-2 h5" style="font-size: 20px;">
                                    {{ $service->title ?? '' }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
