<section class="bg-primary py-8 overflow-visible">
    <div class="container">
        <div class="row justify-content-xxl-end align-items-center">
            <div class="col-lg-9 col-xl-6 mb-4 mb-lg-0 wow fadeIn" data-wow-delay="200ms">
                <div class="section-title white">
                    <h2 class="mb-0 h1 text-white">
                        If you have any queries, our team is ready to
                        response all your queries.
                    </h2>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="400ms">
                <div class="text-lg-end">
                    <a href="{{ route('contact.index') }}" class="butn white"><span>Contact Us</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="left-img-block">
        <div class="left-img">
            <img src="{{ asset('assets/img/content/footer.jpg') }}" alt="...">
        </div>
    </div>
</section>

<footer class="pt-6 pt-lg-8">
    <div class="container">
        <div class="row mt-n2-9 pb-6 pb-lg-8">
            <div class="col-md-4 col-lg-4 col-sm-12 mt-2-9">

                <h3 class="text-white h4 mb-1-9">
                    Facebook
                </h3>
                <br><br>
                <ul class="social-icon-style1">
                    <li>
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12 mt-2-9">
                <h3 class="text-white h4 mb-1-9">Quick Links</h3>

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

                    <li>
                        <a href="{{ route('contact.index') }}">
                            Contact Us
                        </a>
                        <span class="ti-arrow-right"></span>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 col-lg-3 mt-2-9 offset-lg-1">
                <div class="ps-xl-4">
                    <h3 class="text-white h4 mb-1-9">Contacts</h3>
                    <div class="d-flex mb-1-9">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/09.png') }}" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-1 h5 text-white">Contact Us</h4>
                            <p class="mb-0 text-white">
                                09-798488514
                            </p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/icons/10.png') }}" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-1 h5 text-white">Mail Us</h4>
                            <p class="mb-0 text-white">
                                178kyawmyo@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 border-top border-color-light-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <p class="d-inline-block text-white mb-0">&copy;
                        <span class="current-year"></span>
                        Copyright © 2024 MEDIUM WAY RIVER COMPANY LIMITED.
                        <a href="#!" class="text-primary text-white-hover">
                            All Rights Reserved
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
