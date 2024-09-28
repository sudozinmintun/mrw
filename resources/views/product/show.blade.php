@extends('layouts.app')
@section('title', '- Products')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mb-2-9 mb-xl-0 order-1 order-xl-2">
                    <div>
                        <div class="row mb-2-3">

                            <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <img src="{{ $product->photo }}" class="border-radius-10" alt="..."
                                    style="width: 100%; height: 350px; background-size: center; object-fit: cover;">
                            </div>

                            <div class="col-md-6 mb-1-9 mb-md-0 wow fadeInUp" data-wow-delay="200ms">
                                <div class="pe-lg-1-9">
                                    <div class="d-flex border-bottom pb-1-9 mb-1-9">
                                        <div class="flex-grow-1 ms-3">

                                            <h3>
                                                {!! $product->title ?? '' !!}
                                            </h3>

                                            <p class="mb-0" style="color: blue;">
                                                {!! $product->product_description ?? '' !!}
                                            </p>
                                            <hr>
                                            <p class="mb-0">
                                                {!! $product->sub_description_3 ?? '' !!}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row mb-2-3">
                            <div class="col-md-12">
                                <p style="font-size: 20px;">
                                    Product Gallery
                                </p>
                            </div>
                            @php
                                $values = explode(',', $product->images);
                            @endphp
                            @foreach ($values as $gallery)
                                <div class="col-md-3  mt-4 wow fadeInUp" data-wow-delay="100ms"
                                    data-src="{{ $gallery }}">
                                    <div class="portfolio-style01">
                                        <div class="portfolio-img">
                                            <img src="{{ $gallery }}" class="border-radius-10" alt="..."
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover; ">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr>
                        <div class="row mb-2-3">
                            <div class="col-md-12">
                                <p style="font-size: 20px;">
                                    Other Products
                                </p>
                            </div>
                            @foreach ($other_products as $product)
                                <div class="col-lg-3 mb-5 mb-lg-0 mt-n2-2">
                                    <article class="card card-style-04 mt-2-2 wow fadeInUp" data-wow-delay="200ms">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="{{ $product->photo }}" alt="..."
                                                style="width: 100%; height: 300px; background-size: center; object-fit: cover;">
                                        </div>
                                        <div class="card-body p-1-9">
                                            <a href="{{ route('product.show', $product->id) }}" style="font-size: 14px;">
                                                {!! $product->title ?? '' !!}
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
