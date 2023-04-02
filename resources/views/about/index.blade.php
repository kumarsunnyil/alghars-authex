@extends('layouts.app-master')

@section('content')

<link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! url('assets/css/slick.css') !!}">
<link rel="stylesheet" href="{!! url('assets/css/slick-theme.css') !!}">
<link rel="stylesheet" href="{!! url('assets/css/style.css') !!}">
<link href="https://www.dafontfree.net/embed/bmlybWFsYS11aS1ib2xkJmRhdGEvNDYvbi81ODc1OS9OaXJtYWxhQi50dGY"
rel="stylesheet" type="text/css" />
        {{-- <section id="eventBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="eventLeft">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="eventTitle">
                                        Event <br>
                                        Name <br>
                                        Text
                                    </h2>

                                    <div class="singleDescription">
                                        <h3>Description</h3>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                            et dolore magna aliqua. Ut enim ad minim veniam, quis nost
                                            aliquip ex ea commodo consequat. Duis aute irure dolor inur
                                            dolore eu fugiat nulla consequat. Duis aute irur pariatur.
                                            consequat. Duis aute irur consequat. Duis aute irurconsequat.
                                            consequat. Duis aute irur></p>
                                    </div>

                                    <div class="singleDescription">
                                        <h3>Duration</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet,
                                        </p>
                                    </div>


                                </div>

                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="footerLeft">
                                        <h4 class="dateTime">Date - Time</h4>
                                        <p class="location">
                                            <img src="{!! url('assets/images/c-3.png') !!}" alt="location" class="img-fluid">
                                            Place - City
                                        </p>
                                    </div>
                                    <button class="btn commonBtn">Register Now</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 eventBannerRight">
                        <img src="{!! url('assets/images/event-icon-3.png') !!}" alt="event-icon-4" class="img-fluid event-icon-4">
                        <img src="{!! url('assets/images/eventBanner.png') !!}" alt="eventBanner" class="img-fluid">
                    </div>
                </div>
            </div>
        </section> --}}
        <section id="aboutAlghrs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="aboutLeft">
                            <img src="{!! url('assets/images/icon-3.png') !!}" alt="icon" class="img-fluid icon-3">
                            <h2 class="aboutTitle">ABOUT ALGHARS</h2>
                            <p class="aboutText">
                                The planting project was launched at the beginning of the year 2022, and the main goal was
                                It is the improvement of the level of children and their skills in speaking the Arabic
                                language Pronunciation and writing at the level of the United Arab Emirates
                                From the desire of our wise leadership to strengthen the status of the Arabic language in
                                the generation Emerging and installing the concepts of adhering to historical values and
                                identity Derived from our Arabic language and based on the Holy Quran.
                            </p>
                            <button class="btn commonBtn">
                                Download Company Profile
                            </button>
                            <img src="{!! url('assets/images/icon-4.png') !!}" alt="icon" class="img-fluid icon-4">

                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="aboutRight text-center d-flex align-items-center justify-content-center">
                            <img src="{!! url('assets/images/playVideo.png') !!}" alt="play" class="img-fluid w-75">
                        </div>
                    </div>
                </div>
            </div>
            <img src="{!! url('assets/images/icon-5.png') !!}" alt="icon" class="img-fluid icon-5">
        </section>

        <section id="sliderFullCtrl">
            <div class="container-fluid px-0">
                <div class="fullWidthSliderController">

                    <div class="singleSlider">
                        <img src="{!! url('assets/images/slider-1.png') !!}" alt="slider" class="img-fluid">
                    </div>

                    <div class="singleSlider">
                        <img src="{!! url('assets/images/slider-1.png') !!}" alt="slider" class="img-fluid">
                    </div>

                    <div class="singleSlider">
                        <img src="{!! url('assets/images/slider-1.png') !!}" alt="slider" class="img-fluid">
                    </div>

                    <div class="singleSlider">
                        <img src="{!! url('assets/images/slider-1.png') !!}" alt="slider" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
    <!-- External JS Files -->
    <script src="{!! url('assets/js/popper.min.js') !!}"></script>
    <script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! url('assets/js/jquery.slim.') !!}js"></script>
    <script src="{!! url('assets/js/slick.js') !!}"></script>
    <script src="{!! url('assets/js/custom.js') !!}"></script>

@endsection
