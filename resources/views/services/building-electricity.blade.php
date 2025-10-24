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
                                    <li class="active"><span>Electricity In Building</span></li>
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
                            <a href="service-details.html">Mining Services service <i class="fa-solid fa-plus"></i></a>
                            <a href="service-details.html">Building & Freezers Electricity <i class="fa-solid fa-plus"></i></a>
                            <a href="service-details.html">Filters, Coolers and pump maintenance <i class="fa-solid fa-plus"></i></a>
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
                            <img src="{{ asset('assets/imgs/service-details/service-details-2.jpg') }}" class="img-fluid"
                                alt="img not found">
                        </div>

                        <h2 class="title-animation mb-20">Electricity in Building </h2>

                        <p class="mb-20">Electricity is the lifeblood of
                            any modern building, essential for everything
                            from lighting and climate control to powering
                            critical systems and occupant technology.
                            Effective electrical building services are
                            fundamental to a building's function, safety,
                            and efficiency, ensuring a comfortable, productive,
                            and secure environment. These services encompass the
                            entire electrical infrastructure, from the main utility
                            connection point to every outlet and switch.</p>

                        <ul class="mb-40">
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Power Distribution and Wiring</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Lighting Systems</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Essential Power Systems</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Auxiliary and special systems</h5>
                            </li>
                            <li><span><i class="fa-solid fa-check"></i></span>
                                <h5>Energy Management and Efficiency</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
