@extends('layouts.master')

@section('content')
    <div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background" data-background="./assets/imgs/breadcrumb/page-header-1.png"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Filters, Coolers and pump maintenance</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{ route('home') }}">Home</a></span></li>
                                    <li class="active"><span>Maintenance</span></li>
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
                            <img src="{{ asset('assets/imgs/service-details/service-details-4.jpg') }}" class="img-fluid"
                                alt="img not found">
                        </div>

                        <h2 class="title-animation mb-20">Filters, Coolers and Pumps Maintenance</h2>

                        <p class="mb-20">Building services rely heavily on efficient
                            fluid handling and air quality management.
                            Coolers, filters, and pumps are critical components
                            in systems like HVAC (Heating, Ventilation, and Air
                            Conditioning) and domestic water supply, directly
                            impacting occupant comfort, system longevity, and
                            energy use. Regular and proactive maintenance of
                            these elements is essential to prevent costly
                            breakdowns, maintain system performance, and
                            ensure healthy indoor air quality.</p>

                        <ul class="mb-40">
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Filter cleaning and maintenance</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Leak Detection</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Thermostat accuracy check</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Diagnosis and repair</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
