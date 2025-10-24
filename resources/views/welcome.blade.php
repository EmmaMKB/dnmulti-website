@extends('layouts.master')

@section('content')
    <!-- Banner area start -->
    <section class="banner-2 banner-2__space theme-bg-color-900 overflow-hidden"
        data-background="assets/imgs/banner-2/banner-shape.png">
        <div class="container">
            <div class="banner-2__shape"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-2__content">
                        <h1 class="mb-50 mb-xs-40 color-white title-animation">Your trusted partner for all mining needs.
                        </h1>
                        <p class="mb-80 mb-xs-80 color-white">Find what you are looking for with us</p>

                        <div class="rr-btn__wrapper d-flex align-items-sm-center align-items-start flex-column flex-sm-row">
                            <a href="tel:243972329000" class="rr-btn position-relative overflow-hidden">
                                <div class="panel wow"></div>
                                <span class="btn-wrap">
                                    <span class="text-one">Get In Touch</span>
                                    <span class="text-two">Get In Touch</span>
                                </span>
                            </a>

                            <a href="#services" class="readmore">Our Services
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.122 5.30953L7.18453 9.24703C7.10244 9.32912 6.9911 9.37524 6.875 9.37524C6.7589 9.37524 6.64756 9.32912 6.56547 9.24703C6.48337 9.16494 6.43726 9.05359 6.43726 8.9375C6.43726 8.8214 6.48337 8.71006 6.56547 8.62797L9.75648 5.4375H1.1875C1.07147 5.4375 0.960188 5.39141 0.878141 5.30936C0.796094 5.22731 0.75 5.11603 0.75 5C0.75 4.88397 0.796094 4.77269 0.878141 4.69064C0.960188 4.60859 1.07147 4.5625 1.1875 4.5625H9.75648L6.56547 1.37203C6.48337 1.28994 6.43726 1.1786 6.43726 1.0625C6.43726 0.946402 6.48337 0.835061 6.56547 0.752968C6.64756 0.670875 6.7589 0.624756 6.875 0.624756C6.9911 0.624756 7.10244 0.670875 7.18453 0.752968L11.122 4.69047C11.1627 4.7311 11.195 4.77935 11.217 4.83246C11.239 4.88557 11.2503 4.9425 11.2503 5C11.2503 5.05749 11.239 5.11442 11.217 5.16753C11.195 5.22065 11.1627 5.2689 11.122 5.30953Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-2__media">
                        <div class="banner-2__media-shape upDown"></div>
                        <img class="img-fluid" src="assets/imgs/banner-2/banner-2.png" alt="icon not found">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner area end -->

    <!--about-us-2 start -->
    <section class="about-us-2 about-us-2__space">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-2__media">
                        <div class="about-us-2__media-image-1">
                            <a href="#" class="popup-video" data-effect="mfp-move-from-top vertical-middle">
                                <i class="fa-solid fa-play zooming"></i>
                            </a>
                            <img src="assets/imgs/about-us-2/about-us-1.jpg" class="img-fluid" alt="image not found">
                        </div>
                        <div class="about-us-2__media-image-2">
                            <img src="assets/imgs/about-us-2/about-us-2.jpg" class="img-fluid" alt="image not found">
                            <div class="circle upDown">
                                <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M110.785 60.6122L0.517544 60.6122C0.406443 59.4679 0.330326 58.31 0.302317 57.1451L111 57.1451C110.972 58.31 110.896 59.4679 110.785 60.6122ZM109.661 67.6711L1.6416 67.6711C1.38486 66.5272 1.16266 65.3689 0.975465 64.204L110.327 64.204C110.14 65.3689 109.918 66.5272 109.661 67.6711ZM107.545 74.7304L3.76465 74.7304C3.33425 73.5931 2.94589 72.4352 2.59905 71.2633L108.704 71.2633C108.364 72.4352 107.975 73.5931 107.545 74.7304ZM104.325 81.7892L6.98383 81.7892C6.36624 80.6589 5.79063 79.501 5.24913 78.3221L106.053 78.3221C105.519 79.501 104.936 80.6589 104.325 81.7892ZM99.7326 88.8551L11.5702 88.8551C10.7094 87.7317 9.89809 86.5809 9.13485 85.388L102.175 85.388C101.405 86.5809 100.593 87.7318 99.7326 88.8551ZM93.3218 95.9144L17.9809 95.9144C16.7873 94.8116 15.6427 93.6537 14.5536 92.4473L96.7492 92.4473C95.6601 93.6537 94.515 94.8116 93.3218 95.9144ZM83.8722 102.973L27.4236 102.973C25.6333 101.919 23.9131 100.761 22.2616 99.5061L89.0412 99.5062C87.3896 100.755 85.662 101.919 83.8722 102.973ZM64.2512 110.033C61.448 110.469 58.5757 110.698 55.6479 110.698C52.72 110.698 49.8478 110.469 47.0446 110.033C42.7224 109.36 38.5663 108.188 34.6321 106.565L76.6633 106.565C72.7294 108.188 68.5734 109.36 64.2512 110.033ZM0.517545 50.0858L110.785 50.0858C110.896 51.2302 110.972 52.3881 111 53.5529L0.302317 53.5529C0.330326 52.388 0.406444 51.2302 0.517545 50.0858ZM1.64862 43.02L109.654 43.02C109.918 44.1643 110.14 45.3222 110.327 46.4871L0.975467 46.4871C1.16266 45.3222 1.38487 44.1643 1.64862 43.02ZM3.76465 35.9611L107.538 35.9611C107.968 37.098 108.357 38.2564 108.704 39.4282L2.59905 39.4282C2.94589 38.2564 3.33425 37.098 3.76465 35.9611ZM6.99079 28.9018L104.318 28.9018C104.936 30.0322 105.512 31.19 106.046 32.3689L5.25614 32.3689C5.79064 31.19 6.37319 30.0322 6.99079 28.9018ZM11.5702 21.843L99.7326 21.843C100.593 22.9663 101.405 24.1172 102.175 25.3101L9.13486 25.3101C9.89809 24.1172 10.7094 22.9663 11.5702 21.843ZM17.981 14.7837L93.3218 14.7837C94.515 15.8795 95.6601 17.0443 96.7492 18.2508L14.5536 18.2508C15.6427 17.0443 16.7873 15.8794 17.981 14.7837ZM27.4236 7.71783L83.8722 7.71783C85.662 8.77907 87.3826 9.93693 89.0342 11.1849L22.2686 11.1849C23.9132 9.92992 25.6333 8.77906 27.4236 7.71783ZM47.0861 0.658978C49.8753 0.221974 52.7336 0.000198036 55.6479 0.00019829C58.5617 0.000198545 61.4205 0.221975 64.2097 0.65898C68.5459 1.3313 72.7154 2.50319 76.6563 4.12609L34.6391 4.12608C38.5799 2.50319 42.7499 1.33129 47.0861 0.658978Z"
                                        fill="#185EC8" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-2__main-content">
                        <div class="section__title-wrapper about-us-2__content mb-60 mb-xs-50">
                            <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                    src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid"> About
                                Us</h5>
                            <h2 class="section__title mb-20 title-animation">Find what you are looking with us</h2>
                            <p class="mb-0">We are a Congolese private owned company that offers the
                                supply and hire of Industrial equipment, spare parts, electrical equipment,
                                purchase of mining concessions and agri food farms, import and export, sale
                                agricultural products and much more</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-2 end -->
    <!-- services 4 start -->
    <section id="services" class="service-4 section-space">
        <div class="container">
            <div class="row mb-60 mb-xs-50 align-items-lg-end align-items-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper blog-2__content">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid"> Our
                            Services
                        </h5>
                        <h2 class="section__title mb-0 title-animation">You can trust as we offer you the best services.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-60">
                <div class="col-xl-3 col-md-6">
                    <div class="service-2__item">
                        <a href="#" class="service-2__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/service-2/service-1.jpg') }}" alt="image not found">
                        </a>

                        <div class="service-2__item-content">
                            <h4 class="mb-20 mb-xs-15 d-flex align-items-start">
                                <a href="{{ route('services.mining') }}">
                                    <img class="img-fluid mr-15" src="assets/imgs/service-2/service-icon-1.png"
                                        alt="icon not found">
                                    Mining Services</a>
                            </h4>

                            <p>We provide clients with turnkey solutions that
                                emphasize engineering expertise, safe, and
                                high-quality mining infrastructure.</p>

                            <a class="rr-a-btn mt-30 mt-xs-25 d-block" href="{{ route('services.mining') }}">Read More <i
                                    class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-2__item">
                        <a href="#" class="service-2__item-media">
                            <img class="img-fluid" src="{{ asset('assets/imgs/service-2/service-2.jpg') }}" alt="image not found">
                        </a>

                        <div class="service-2__item-content">
                            <h4 class="mb-20 mb-xs-15 d-flex align-items-start">
                                <a href="{{ route('services.building-electricity') }}">
                                    <img class="img-fluid mr-15" src="assets/imgs/service-2/service-icon-1.png"
                                        alt="icon not found">
                                    Electricity in building</a>
                            </h4>

                            <p class="mb-30">We specialize in delivering comprehensive electrical
                                solutions for buildings, ensuring
                                optimal performance and energy efficiency.</p>

                            <a class="rr-a-btn mt-30 mt-xs-25 d-block" href="{{ route('services.building-electricity') }}">Read More <i
                                    class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="service-2__item">
                        <a href="#" class="service-2__item-media">
                            <img class="img-fluid" src="assets/imgs/service-2/service-3.jpg" alt="image not found">
                        </a>

                        <div class="service-2__item-content">
                            <h4 class="mb-20 mb-xs-15 d-flex align-items-start">
                                <a href="blog-details.html">
                                    <img class="img-fluid mr-15" src="assets/imgs/service-2/service-icon-3.png"
                                        alt="icon not found">Filters, Coolers and pumps maintenance</a>
                            </h4>

                            <ul>
                                <li>Filter cleaning and maintenance</li>
                                <li>Leak Detection</li>
                                <li>Thermostat accuracy check</li>
                                <li>Diagnosis and repair</li>
                            </ul>

                            <a class="rr-a-btn mt-30 mt-xs-25 d-block" href="#">Read More <i
                                    class="fa-solid fa-circle-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services 4 end -->
    <!-- take-appointment area start -->
    <section class="take-appointment section-space overflow-hidden">
        <div class="container">
            <div class="take-appointment__container-shape"
                data-background="assets/imgs/take-appointment/container-shape.png">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title-wrapper take-appointment__content">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">Have a specific need?</h5>
                        <h2 class="section__title mb-20 mb-xs-15 title-animation">Get in touch with us.</h2>

                        <p class="mb-30 mb-xs-25">Looking for reliable and efficient solutions
                            for your mining or business needs? Get in touch with our experts
                            to learn more about our services and get a free consultation. </p>

                        <div class="take-appointment__call d-flex align-items-center">
                            <div class="take-appointment__call-icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="take-appointment__call-text">
                                <p class="mb-0">Requesting A Call:</p>
                                <h5 class="mb-0"><a href="tel:243972329000">+243 972 329 000</a></h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="take-appointment__form mt-md-50 mt-sm-40 mt-xs-40">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="name">Your name</label>
                                    <div class="input-wrapper">
                                        <input name="name" id="name" required type="text" placeholder="Your name...">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="take-appointment__form-input">
                                    <label for="email">Your Email</label>
                                    <div class="input-wrapper">
                                        <input name="email" id="email" required type="text" placeholder="Your email...">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="take-appointment__form-input">
                                    <label for="phone">Your message</label>
                                    <div class="input-wrapper">
                                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="rr-btn rr-btn__primary-color mt-10 mt-xs-10">
                                    <span class="btn-wrap">
                                        <span class="text-one">Send your message <i class="fa-solid fa-plus"></i></span>
                                        <span class="text-two">Send your message <i class="fa-solid fa-plus"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- take-appointment area end -->
@endsection
