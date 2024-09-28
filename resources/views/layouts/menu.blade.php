<header class="header-style2">
    <div class="top-bar bg-primary" hidden>
        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="top-bar-info">
                        <ul class="ps-0">
                            <li><i class="ti-mobile"></i>09 785 327000</li>
                            <li class="d-none d-sm-inline-block">
                                <i class="ti-email"></i>
                                ssnpengineering@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 d-none d-md-block">
                    <ul class="top-social-icon ps-0">
                        <li><a href="https://www.facebook.com/profile.php?id=100057289216183"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-default border-bottom" style="background-color: white;">
        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <style>
                                .navbar-brand-c {
                                    padding-top: var(--bs-navbar-brand-padding-y);
                                    padding-bottom: var(--bs-navbar-brand-padding-y);
                                    margin-right: var(--bs-navbar-brand-margin-end);
                                    font-size: var(--bs-navbar-brand-font-size);
                                    color: var(--bs-navbar-brand-color);
                                    text-decoration: none;
                                    white-space: nowrap;

                                    transition: all 0.5s ease 0s;
                                    display: inline-block;
                                }
                            </style>

                            <div class="">
                                <a href="{{ route('welcome') }}" class="navbar-brand-c">
                                    <img src="{{ asset('data/logo.png') }}" alt="logo" style="width: 170px" />
                                </a>
                            </div>

                            <div class="navbar-toggler bg-primary"></div>

                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">

                                <li>
                                    <a href="{{ route('welcome') }}">
                                        Home
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('about.index') }}">
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('about.index') }}">
                                        Company Profile
                                    </a>
                                </li>

                                <!--<li>-->
                                <!--    <a href="#!">About Us</a>-->
                                <!--    <ul>-->
                                <!--        <li>-->
                                <!--            <a href="{{ route('about.index') }}">-->
                                <!--                Our Company-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--        <li hidden>-->
                                <!--            <a href="{{ route('history.index') }}">-->
                                <!--                Our History-->
                                <!--            </a>-->
                                <!--        </li>-->
                                <!--    </ul>-->
                                <!--</li>-->

                                <li hidden>
                                    <a href="{{ route('services.index') }}">
                                        Services
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Projects
                                    </a>
                                    <ul>



                                        <li>
                                            <a href="{{ route('project_list', ['status' => 'completed']) }}">
                                                Completed Projects
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('project_list', ['status' => 'on_going']) }}">
                                                On Going Projects
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('list_project') }}">
                                        Lists
                                    </a>
                                </li>


                                <li hidden>
                                    <a href="{{ route('product.index') }}">
                                        Products
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('activities.index') }}">
                                        Activities
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        Contact
                                    </a>
                                </li>

                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
