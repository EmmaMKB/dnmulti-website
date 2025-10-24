@extends('layouts.master')

@section('content')
    <div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background" data-background="./assets/imgs/breadcrumb/page-header-1.png"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Mining Services</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('home') }}">Home</a></span></li>
                                    <li class="active"><span>Mining Services</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <section class="service-details section-space">
        <div class="container">
            <div class="row flex-xl-row flex-column-reverse">
                <div class="col-xl-4">
                    <div class="sidebar sidebar-rr-sticky">
                        <div class="sidebar__widget-service mb-30">
                            <a href="{{ route('services.mining') }}">Mining Services service <i class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('services.building-electricity') }}">Building Electricity <i class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('services.freezers-electricity') }}">Freezers Electricity <i class="fa-solid fa-plus"></i></a>
                            <a href="{{ route('services.maintenance') }}">Filters, Coolers and pump maintenance <i class="fa-solid fa-plus"></i></a>
                        </div>

                        <div class="sidebar__widget-contact__service text-center">
                            <h4 class="mb-25 title-animation text-capitalize">Are You ready to work with us</h4>
                            <p class="mb-20"><a href="tel:243972329000"><i class="fa-solid fa-phone"></i>+243 972 329 000
                                    </a></p>

                            <a href="tel:243972329000" class="rr-btn">
                                <span class="btn-wrap">
                                    <span class="text-one">Call Us <i class="fa-solid fa-plus"></i></span>
                                    <span class="text-two">Call Us <i class="fa-solid fa-plus"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="service-details__content">
                        <div class="service-details__content-media mb-20">
                            <img src="{{ asset('assets/imgs/service-details/service-details-1.jpg') }}" class="img-fluid"
                                alt="img not found">
                        </div>

                        <h2 class="title-animation mb-20">Mining Services </h2>

                        <p class="mb-20">In the dynamic and challenging world of mineral
                            extraction, success hinges on precision, reliability,
                            and adherence to the highest safety and environmental standards.
                            We are your dedicated partner, offering a full spectrum of
                            specialized mining services designed to optimize your
                            operations from exploration to rehabilitation.
                            Let our expertise unlock your project's full potential.</p>

                        <p class="mb-20">Web designing in a powerful way of just not an only professions, however, in a
                            passion for our Company. We have to a tendency to believe the idea that smart looking of any
                            websitet in on visitors.Web designing in a powerful way of just not an only profession Web
                            designing in a powerful way of just not an only </p>

                        <ul class="mb-40">
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Full Contract Mining</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Maintenance & Reliability Services</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>On-Site Maintenance</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
