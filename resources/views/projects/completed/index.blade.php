@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <div class="row mt-n2-9">
                <div class="col-lg-8 mt-2-9">
                    <div class="row g-xl-5 mt-n2-9">

                        @foreach ($projects as $project)
                            <div class="col-md-6 mt-2-9 wow fadeInUp" data-wow-delay="200ms">
                                <article class="card-style02">
                                    <div class="card-tag">
                                        <a href="{{ route('project.show', $project->id) }}">MWR</a>
                                    </div>
                                    <div class="card-image">
                                        <img src="{{ $project->photo ?? '' }}" alt="..."
                                            style="width: 100%; height: 500px; background-size: center; object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h4 mb-3">
                                            <a href="{{ route('project.show', $project->id) }}" class="text-white">
                                                {{ $project->title ?? '' }}
                                            </a>
                                        </h3>
                                        <ul class="card-list ps-0 m-0">
                                            <li>
                                                <i class="far fa-calendar me-2"></i>
                                                {{ $project->project_year ?? '' }}
                                            </li>
                                            <li class="text-capitalize">
                                                <i class="far fa-user me-2"></i>
                                                <a href="#!">MWR</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="link-btn">
                                            <a href="{{ route('project.show', $project->id) }}">
                                                Read More
                                                <i class="ti-arrow-right align-middle ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="col-lg-4 mt-2-9">
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

                        <div class="widget mb-1-9 wow fadeInUp" data-wow-delay="800ms">
                            <div class="widget-content">
                                <div class="section-title">
                                    <h5 class="sm-title mb-4">Follow Us</h5>
                                </div>
                                <ul class="social-icon-style2 ps-0">
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

                        <div class="sidebar-banner bg-img cover-background wow fadeInUp" data-wow-delay="950ms"
                            data-background="{{ asset('assets/img/content/sidebar.jpg') }}">
                            <div class="content d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/09.png') }}" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="text-white mb-1">
                                        09-798488514
                                    </h4>
                                    <span class="text-white">
                                        178kyawmyo@gmail.com
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
