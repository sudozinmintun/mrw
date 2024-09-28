@extends('layouts.app')
@section('title', '- Products')
@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0 mt-n2-2">
                    <center>
                        <h3>
                            Our Products
                        </h3>
                    </center>
                </div>
                <br>
                @foreach ($products as $product)
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
    </section>

@endsection
