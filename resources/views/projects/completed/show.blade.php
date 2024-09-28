@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row">

                <div class="col-xl-4 order-2 order-xl-1">
                    <div class="sidebar ps-xl-1-9">

                        <div class="widget mb-1-9 wow fadeInUp" data-wow-delay="350ms">
                            <div class="widget-content">
                                <div class="section-title">
                                    <h5 class="sm-title mb-4">
                                        Other Projects
                                    </h5>
                                </div>
                                @foreach ($all_projects as $all_project)
                                    <div class="d-flex align-items-center border-bottom border-color-light-black pb-4 mb-4">
                                        <div class="flex-shrink-0">
                                            <img src="{{ $all_project->photo }}" class="rounded-circle" alt="..."
                                                style="width: 100px">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="mb-1 h6">
                                                <a href="{{ route('project.show', $all_project->id) }}">
                                                    {{ $all_project->title ?? '' }}
                                                </a>
                                            </h4>
                                            <span class="small text-primary">
                                                {{ $all_project->title ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="widget mb-1-9 wow fadeInUp" data-wow-delay="500ms">
                            <div class="widget-content">
                                <div class="section-title">
                                    <h5 class="sm-title mb-4">Quick Links</h5>
                                </div>
                                <ul class="category-list list-unstyled mb-0">
                                    <li>
                                        <a href="{{ route('welcome') }}">
                                            Home
                                        </a>
                                        <span class="ti-arrow-right"></span>
                                    </li>

                                    <li>
                                        <a href="{{ route('about.index') }}">
                                            Our Company
                                        </a>
                                        <span class="ti-arrow-right"></span>
                                    </li>

                                    <li>
                                        <a href="{{ route('activities.index') }}">
                                            Our Activities
                                        </a>
                                        <span class="ti-arrow-right"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 mb-2-9 mb-xl-0 order-1 order-xl-2">
                    <div>
                        <div class="wow fadeInUp" data-wow-delay="200ms">
                            <img src="{{ $project->photo }}" class="border-radius-10 mb-1-9" alt="...">
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="300ms">
                            <h2 class="mb-3">
                                {{ $project->title ?? '' }}
                            </h2>
                            <p class="mb-4">
                                {!! $project->description ?? '' !!}
                            </p>
                        </div>
                        <div class="row mt-n1-9">
                            <div class="col-md-6 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/13.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3 ms-lg-4">
                                        <h3 class="h5 mb-3">
                                            <a href="#!">Project Name</a>
                                        </h3>
                                        <p class="mb-0">
                                            {{ $project->title ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1-9 wow fadeInUp" data-wow-delay="350ms">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/13.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3 ms-lg-4">
                                        <h3 class="h5 mb-3"><a href="#!">Project Location</a></h3>
                                        <p class="mb-0">{{ $project->location ?? '' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1-9 wow fadeInUp" data-wow-delay="500ms">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/15.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3 ms-lg-4">
                                        <h3 class="h5 mb-3"><a href="#!">Projects Year</a></h3>
                                        <p class="mb-0">
                                            {{ $project->project_year ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1-9 wow fadeInUp" data-wow-delay="650ms">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/16.png') }}" alt="...">
                                    </div>
                                    <div class="flex-grow-1 ms-3 ms-lg-4">
                                        <h3 class="h5 mb-3"><a href="#!">Types of Services</a></h3>
                                        <p class="mb-0">
                                            {{ $project->type_of_service ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="wow fadeInUp" data-wow-delay="300ms">
                            <h2 class="mb-3">
                                Project Gallery
                            </h2>
                        </div>


                        <div class="row mb-5"
                            style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px; padding: 25px;">
                            @php
                                $values = explode(',', $project->images);
                            @endphp
                            @foreach ($values as $gallery)
                                <div class="col-md-6 col-xl-3 mt-4 wow fadeInUp" data-wow-delay="100ms"
                                    data-src="{{ $gallery }}">
                                    <div class="">
                                        <div class="">
                                            <img src="{{ $gallery }}" class="border-radius-10" alt="..."
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover; padding: 5px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
