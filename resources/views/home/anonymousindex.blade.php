@extends('layouts.app-master')
@section('content')
    <div class="bg-light p-5 rounded " style="margin-left:100px">
        @guest
            <section id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <div class="bannerLeft">
                                <p class="arobicTitle arabic">
                                    ,
                                    معكم وبكم
                                    <br>..
                                    نغرس فيثمرون
                                </p>
                                <p class="bannerTitle">
                                    We <span>Help,</span> Develop, and Instil
                                    <br>
                                    The <span>Arabic</span> Language Skills
                                    <br>
                                    Mentally and Verbally.
                                </p>

                                <div class="bannerBtnCtrl text-center">
                                    <a href="#" class="btn commonBtn">Discover more</a>
                                    <p class="comunityTxt"> & Join Our Community</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="bannerRight bannerRightSlider">
                                <div class="singleSlide">
                                    <img src="{!! url('assets/images/banner.png') !!}" alt="banner" class="img-fluid">
                                </div>

                                <div class="singleSlide eventComming">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{!! url('assets/images/playVideo.png') !!}" alt="play" class="img-fluid">

                                            <h4 class="eventSmlTitle">Upcomming Event</h4>
                                            <h2 class="card-title">Khalifa Park Event</h2>
                                        </div>
                                        <div class="card-footer">
                                            <p>
                                                Lorem, ipsum dolor. <br>
                                                Lorem, ipsum dolor.
                                            </p>
                                            <a href="#" class="btn exploreBtn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="multiCards">
                <div class="container">

                    <div class="multiCardsCtrl row row-cols-md-3 row-cols-1 g-5">
                        <div class="col">
                            <img src="{!! url('assets/images/icon-1.png') !!}" alt="icon" class="img-fluid icon-1">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="cardNumber">1</h2>
                                    <h3 class="card-title">We <br>
                                        Measure</h3>
                                    <p class="card-text">
                                        After completing <br>
                                        the evaluation report
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="cardNumber">2</h2>
                                    <h3 class="card-title">
                                        Detailed <br>
                                        Report
                                    </h3>
                                    <p class="card-text">
                                        Contians the current <br>
                                        level and listing the <br>
                                        weeknesses and <br>
                                        suggestions
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <img src="{!! url('assets/images/icon-2.png') !!}" alt="icon" class="img-fluid icon-2">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="cardNumber">3</h2>
                                    <h3 class="card-title">
                                        Customized <br>
                                        Plan
                                    </h3>
                                    <p class="card-text">
                                        Detailed with key <br>
                                        performances and <br>
                                        specific subjects
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
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
            <section id="ourService">
                <img src="{!! url('assets/images/icon-8.png') !!}" alt="" class="img-fluid icon-8">
                <div class="container">
                    <div class="text-center py-5 d-none d-md-block">
                        <img src="{!! url('assets/images/icon-6.png') !!}" alt="" class="img-fluid">
                    </div>

                    <h2 class="serviceTitle">
                        OUR SERVICES
                    </h2>
                    <h5 class="serviceSmlTitle">
                        Private Tutoring <br>
                        Programs
                    </h5>
                    <div class="innerCard">
                        <div class="row row-cols-1 row-cols-md-2 g-5">

                            <div class="col">
                                <div class="card">
                                    <img src="{!! url('assets/images/card-1.png') !!}" alt="card" class="card-img-top">
                                    <div class="card-body">
                                        <div class="cardFirstInfo d-flex align-items-center">
                                            <h2 class="cardCount">1</h2>

                                            <div class="rightInfo ps-4">
                                                <h4 class="card-title">BINA’A</h4>
                                                <p class="rightTxt">
                                                    Is an educational programme built after evaluating the
                                                    child that helps the child learn in progressive stages
                                                    that also develops the child’s self estem and confidence.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex align-items-center justify-content-between">
                                        <ul class="footerText list-unstyled">
                                            <li>- Annual, midterm and quarterly treatment plans</li>
                                            <li>- Availabilty for installment plan</li>
                                            <li>- Specified learning content</li>
                                            <li>- Monthly evaluation </li>
                                        </ul>
                                        <button class="btn commonBtn">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="{!! url('assets/images/icon-7.png') !!}" alt="" class="img-fluid icon-7">
                                <div class="card">
                                    <img src="{!! url('assets/images/card-2.png') !!}" alt="card" class="card-img-top">
                                    <div class="card-body">
                                        <div class="cardFirstInfo d-flex align-items-center">
                                            <h2 class="cardCount">2</h2>

                                            <div class="rightInfo ps-4">
                                                <h4 class="card-title">QURAAN <br>
                                                    Learning</h4>
                                                <p class="rightTxt">
                                                    The programe teaches the child the Arabic language
                                                    using the Holy Quraan with pronunciations, reading
                                                    and writing.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex align-items-center justify-content-between">
                                        <ul class="footerText list-unstyled">
                                            <li>- Annual, midterm and quarterly treatment plans</li>
                                            <li>- Availabilty for installment plan</li>
                                            <li>- Specified learning content</li>
                                            <li>- Monthly evaluation </li>
                                        </ul>
                                        <button class="btn commonBtn">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="{!! url('assets/images/card-3.png') !!}" alt="card" class="card-img-top mt-5">
                                    <div class="card-body">
                                        <div class="cardFirstInfo d-flex align-items-center">
                                            <h2 class="cardCount">3</h2>

                                            <div class="rightInfo ps-4">
                                                <h4 class="card-title">Melodic Learning <br>
                                                    Program</h4>
                                                <p class="rightTxt">
                                                    This program aims to teaches the arabic language to
                                                    children by singing and repeating the arabic sentences
                                                    in melodic style.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex align-items-center justify-content-between">
                                        <ul class="footerText list-unstyled">
                                            <!-- <li>- Annual, midterm and quarterly treatment plans</li>
                                                    <li>- Availabilty for installment plan</li>
                                                    <li>- Specified learning content</li>
                                                    <li>- Monthly evaluation </li> -->
                                        </ul>
                                        <button class="btn commonBtn">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="{!! url('assets/images/icon-9.png') !!}" alt="" class="img-fluid icon-9">
                                <div class="card">
                                    <img src="{!! url('assets/images/card-4.png') !!}" alt="card" class="card-img-top">
                                    <div class="card-body">
                                        <div class="cardFirstInfo d-flex align-items-center">
                                            <h2 class="cardCount">4</h2>

                                            <div class="rightInfo ps-4">
                                                <h4 class="card-title">Al Ghars <br>
                                                    Events</h4>
                                                <p class="rightTxt">
                                                    In corporation with KHALIFA PARK and different
                                                    cultural parties.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-md-flex align-items-center justify-content-between">
                                        <ul class="footerText list-unstyled">
                                            <!-- <li>- Annual, midterm and quarterly treatment plans</li>
                                                    <li>- Availabilty for installment plan</li>
                                                    <li>- Specified learning content</li>
                                                    <li>- Monthly evaluation </li> -->
                                        </ul>
                                        <button class="btn commonBtn">
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="achivements">
                <img src="{!! url('assets/images/icon-10.png') !!}" alt="" class="img-fluid icon-10">
                <div class="container">
                    <h2 class="achivementTitle">ACHIEVMENTS</h2>
                    <div class="achivementCards row row-cols-md-3 row-cols-1 g-5">
                        <div class="col">
                            <div class="card">
                                <img src="{!! url('assets/images/1.png') !!}" alt="achive" class="card-img-top">

                                <div class="card-body text-center">
                                    <h2 class="count">9</h2>
                                    <p class="countName">Events</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="{!! url('assets/images/2.png') !!}" alt="achive" class="card-img-top">

                                <div class="card-body text-center">
                                    <h2 class="count">+999</h2>
                                    <p class="countName">Hourly classes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="{!! url('assets/images/3.png') !!}" alt="achive" class="card-img-top">

                                <div class="card-body text-center">
                                    <h2 class="count">+99</h2>
                                    <p class="countName">Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{!! url('assets/images/icon-11.png') !!}" alt="" class="img-fluid icon-11">
            </section>
            <section id="algharsNews">
                <img src="{!! url('assets/images/icon-1.png') !!}" alt="icon" class="img-fluid icon-1">
                <img src="{!! url('assets/images/icon-2.png') !!}" alt="icon" class="img-fluid icon-2">
                <img src="{!! url('assets/images/icon-12.png') !!}" alt="icon" class="img-fluid icon-12">
                <div class="container-fluid">
                    <h2 class="algharsTitle">ALGHARS NEWS</h2>
                    <div class="newsSlider">
                        <div class="singleSlider">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{!! url('assets/images/news.png') !!}" alt="news" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <h4 class="card-title">NEWS HEADER</h4>
                                    <p class="card-text">
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor in
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="singleSlider">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{!! url('assets/images/news.png') !!}" alt="news" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <h4 class="card-title">NEWS HEADER</h4>
                                    <p class="card-text">
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor in
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="singleSlider">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{!! url('assets/images/news.png') !!}" alt="news" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <h4 class="card-title">NEWS HEADER</h4>
                                    <p class="card-text">
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor in
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="singleSlider">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="{!! url('assets/images/news.png') !!}" alt="news" class="img-fluid">
                                </div>
                                <div class="card-footer">
                                    <h4 class="card-title">NEWS HEADER</h4>
                                    <p class="card-text">
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor in
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="registration">
                <div class="container">
                    <h2 class="registrationTitle">REGISTRATION FORM</h2>
                    <div class="row">
                        <div class="col-md-5">
                            <form method="post" action="{{ route('register.perform') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="singleInput">
                                    <input type="text" class="form-control" name="name" value="{{ old('age') }}"
                                        placeholder="Enter Student name" required="required" autofocus>
                                    <label for="floatingName">Student's Name</label>
                                    @if ($errors->has('age'))
                                        <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <input type="text" class="form-control" name="age" value="{{ old('age') }}"
                                        placeholder="Enter your age" required="required" autofocus>
                                    <label for="floatingName">Age of student</label>
                                    @if ($errors->has('age'))
                                        <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <input type="text" class="form-control" name="grade" value="{{ old('grade') }}"
                                        placeholder="Enter the Grade" required="required" autofocus>
                                    <label for="floatingName">Grade</label>
                                    @if ($errors->has('grade'))
                                        <span class="text-danger text-left">{{ $errors->first('grade') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <input type="text" class="form-control" name="p_name" value="{{ old('p_name') }}"
                                        placeholder="Parents Name" required="required" autofocus>
                                    <label for="floatingName">Parents Name</label>
                                    @if ($errors->has('p_name'))
                                        <span class="text-danger text-left">{{ $errors->first('p_name') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                        placeholder="Phone Number" required="required" autofocus>
                                    <label for="floatingName">Phone Number</label>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ old('email') }}" placeholder="name@example.com" required="required"
                                        autofocus>

                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <input type="text" class="form-control" name="location"
                                        value="{{ old('location') }}" placeholder="Enter the Location" required="required"
                                        autofocus>
                                    <label for="floatingName">Enter the Location</label>
                                    @if ($errors->has('location'))
                                        <span class="text-danger text-left">{{ $errors->first('location') }}</span>
                                    @endif
                                </div>
                                <div class="singleInput">
                                    <label for="floatingName">Program Name</label>
                                    <select class="form-select" aria-label="Default select example" id="program_name"
                                        name="program_name" value="{{ old('program_name') }}">
                                        <option selected disabled>Choose Program</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    @if ($errors->has('program_name'))
                                        <span class="text-danger text-left">{{ $errors->first('program_name') }}</span>
                                    @endif
                                </div>

                                <div class="singleInput">
                                    <label for="floatingName">Enter your message</label>
                                    <textarea class="form-control" name="message" value="{{ old('message') }}" placeholder="Enter your message"
                                        required="required" cols="30" rows="5" autofocus>
                                    </textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger text-left">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <button class="btn commonBtn" type="submit">Register</button>
                                @include('auth.partials.copy')
                            </form>
                        </div>
                        <div class="col-md-7">
                            <div class="formRight">
                                <div class="singleItem">
                                    <div class="textItem d-flex align-items-center">
                                        <div class="textWithNumber">
                                            <h2>1 </h2>
                                            <p class="text">
                                                Fill in the registration form and select
                                                favorite programme
                                            </p>
                                        </div>
                                        <img src="{!! url('assets/images/form-1.png') !!}" alt="form-1" class="img-fluid">
                                    </div>
                                </div>
                                <div class="singleItem">
                                    <div class="textItem d-flex align-items-center">
                                        <div class="textWithNumber">
                                            <h2>2</h2>
                                            <p class="text">
                                                Schedule an evaluation visit
                                            </p>
                                        </div>
                                        <img src="{!! url('assets/images/form-2.png') !!}" alt="form-1" class="img-fluid">
                                    </div>
                                </div>
                                <div class="singleItem">
                                    <div class="textItem d-flex align-items-center">
                                        <div class="textWithNumber">
                                            <h2>3</h2>
                                            <p class="text">
                                                Choose the appropriate package with
                                                the times after viewing the report
                                            </p>
                                        </div>
                                        <img src="{!! url('assets/images/form-3.png') !!}" alt="form-1" class="img-fluid">
                                    </div>
                                </div>
                                <div class="singleItem">
                                    <div class="textItem d-flex align-items-center">
                                        <div class="textWithNumber">
                                            <h2>4</h2>
                                            <p class="text">
                                                Make sure to complete the payment
                                                process electronically to confirm
                                                registration
                                            </p>
                                        </div>
                                        <img src="{!! url('assets/images/form-4.png') !!}" alt="form-1" class="img-fluid">
                                    </div>
                                </div>
                                <div class="singleItem">
                                    <div class="textItem d-flex align-items-center">
                                        <div class="textWithNumber">
                                            <h2>5</h2>
                                            <p class="text">
                                                Follow the dates of the sessions through
                                                the dedicated application
                                            </p>
                                        </div>
                                        <img src="{!! url('assets/images/form-5.png') !!}" alt="form-1" class="img-fluid">
                                    </div>
                                </div>
                                <img src="{!! url('assets/images/doubleDash.png') !!}" alt="doubleDash" class="img-fluid doubleDash">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-center">
                            <img src="{!! url('assets/images/footerLogo.png') !!}" alt="footerLogo" class="img-fluid">
                            <div class="footerInfo">
                                <h2>
                                    Get <br>
                                    <span>AL GHARS</span>
                                </h2>
                                <h3>application now</h3>
                                <div class="downloadInfo">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="{!! url('assets/images/d-1.png') !!}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#">
                                                <img src="{!! url('assets/images/d-2.png') !!}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Contact" class="col-md-6 contactInfo">
                            <h2><span>CONTACT US</span></h2>
                            <ul class="list-unstyled">
                                <li>
                                    <img src="{!! url('assets/images/c-1.png') !!}" alt="c-1" class="img-fluid">
                                    + 090 5455 5454 545
                                </li>
                                <li>
                                    <img src="{!! url('assets/images/c-2.png') !!}" alt="c-1" class="img-fluid">
                                    EMAIL@COMPANY.COM
                                </li>
                                <li>
                                    <img src="{!! url('assets/images/c-3.png') !!}" alt="c-1" class="img-fluid">
                                    Abu Dhabi - Al Khalidiyah - Al Ghawas Building - Office No. 503
                                </li>
                            </ul>
                            <p class="copyright">Copyright @2023 Alghars</p>
                        </div>
                    </div>
                </div>
                <img src="{!! url('assets/images/footerLine.png') !!}" alt="" class="img-fluid footerLine">
            </footer>
            <!-- External JS Files -->
            <script src="{!! url('assets/js/popper.min.js') !!}"></script>
            <script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>
            <script src="{!! url('assets/js/jquery.slim.js') !!}"></script>
            <script src="{!! url('assets/js/slick.js') !!}"></script>
            <script src="{!! url('assets/js/custom.js') !!}"></script>
        @endguest
    </div>
@endsection
