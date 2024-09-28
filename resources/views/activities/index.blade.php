@extends('layouts.app')
@section('title', '- Activities')
@section('content')

    <section>
        <div class="container">
            <div class="col-lg-12 mb-5 mb-lg-0 mt-n2-2">
                <center>
                    <h3>
                        Our Activities
                    </h3>
                </center>
            </div>
            <br>
            <div class="row portfolio-gallery mt-n4">
                @foreach ($activities as $activitie)
                    @php
                        $values = explode(',', $activitie->images);
                    @endphp
                    @foreach ($values as $gallery)
                        <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="100ms" data-src="{{ $gallery }}"
                            data-sub-html="<p>{{ $activitie->title ?? '' }}</p>">
                            <div class="portfolio-style01">
                                <div class="portfolio-img">
                                    <img src="{{ $gallery }}" class="border-radius-10" alt="..."
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 5px;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

@endsection
