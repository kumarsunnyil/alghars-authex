@extends('layouts.app-master')
@section('content')
    @guest
        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="bannerLeft">
                            <p class="arobicTitle arabic">
                                <span class="nirmolaUI">,</span>معكم وبكم
                                <br>..
                                نغرس فيثمرون
                            </p>
                            <p class="bannerTitle">
                                نحن <span>نساعد</span> <span class="nirmolaUI color1">,</span>نطور<span
                                    class="nirmolaUI color1">,</span> نغرس
                                <br>
                                مهارات <span>اللغة العربية</span>
                                <br>.
                                بطريقة مخصصة وعلاجية
                            </p>

                            <div class="bannerBtnCtrl text-center">
                                <a href="#" class="btn commonBtn">إستـكشف أكثر</a>
                                <p class="comunityTxt"> و انضم لمجموعة واسعة من المتميزين</p>
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
                        <img src="{!! url('assets/images/icon-2.png') !!}" alt="icon" class="img-fluid icon-2">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="cardNumber">3</h2>
                                <h3 class="card-title">لنبدأ<br>
                                    الغــرس</h3>
                                <p class="card-text">
                                    يتم قياس تقدم الطفل بناء على
                                    <br>
                                    مؤشرات آداء محددة ضمن الخطة
                                    <br>
                                    العلاجية والمنهج المخصص له
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="cardNumber">2</h2>
                                <h3 class="card-title">
                                    تقرير <br>
                                    مفصــل
                                </h3>
                                <p class="card-text">
                                    يحدد مستوى طفلك من الناحية
                                    <br>
                                    اللغوية والسلوكية و يقترح الباقة
                                    <br>
                                    المناسبة لمستوى الطفل
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="cardNumber">1</h2>
                                <h3 class="card-title">
                                    نقيم <br>
                                    طفــلك
                                </h3>
                                <p class="card-text">
                                    بعد حجز موعد الزيارة يتم
                                    <br>
                                    تحديد مستوى طفلك
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
                            <h2 class="aboutTitle">تعرف على الغرس</h2>
                            <p class="aboutText">
                                انطلق مشروع الغرس في بدايه العام 2022 وكـان الهدف الأساسي هو تحسين مستوى الاطفال ومهاراتهم
                                في التحـدث باللغه العربية نطقا وكتابة علي مستـوى دولة الامارات العـربية المتحدة انطلاقا من
                                توجه قيادتنا الرشيدة في تعزيز مكانة اللغة العربية عند الجيل الناشــئ وتـثبيت مفاهـيم التـمسك
                                بالقيــم و الهـوية التاريخـية المستمدة من لغتنا العربية وأساسها القران الكريم
                            </p>
                            <button class="btn commonBtn">
                                تحميل الملف التعريفي
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
            <!-- <img src="images/icon-5.png" alt="icon" class="img-fluid icon-5"> -->
        </section>

        <section id="ourService">
            <img src="{!! url('assets/images/icon-8.png') !!}" alt="" class="img-fluid icon-8">
            <div class="container">
                <div class="text-center py-5 d-none d-md-block">
                    <img src="{!! url('assets/images/icon-6.png') !!}" alt="" class="img-fluid">
                </div>

                <h2 class="serviceTitle">
                    خدمــاتنا
                </h2>
                <h5 class="serviceSmlTitle">
                    البرامج العلاجية <br>
                    المخصصة
                </h5>

                <div class="innerCard">
                    <div class="row row-cols-1 row-cols-md-2 g-5 innerCardFlexCtrl">

                        <div class="col">
                            <div class="card">
                                <img src="{!! url('assets/images/card-1.png') !!}" alt="card" class="card-img-top">
                                <div class="card-body">
                                    <div class="cardFirstInfo d-flex align-items-center">
                                        <h2 class="cardCount">1</h2>

                                        <div class="rightInfo ps-4">
                                            <h4 class="card-title">بناء</h4>
                                            <p class="rightTxt">
                                                وهو برنامج لغوي مصمم وفقا لتقييم الطفل الأولي
                                                الذي ليه خطة عــلاجية باستخــدام منهجيـــات تعليمية
                                                مبتكرة بهدف تقوية الطفل وزيادة ثقته وحصيلته اللغوية

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer d-md-flex align-items-center justify-content-between">
                                    <ul class="footerText list-unstyled">
                                        <li> منهج مخصص -</li>
                                        <li> إمكانية تقسيط الإشتراك -</li>
                                        <li> تقييم شهري لمستوى الطالب -</li>
                                        <li> خطط علاجية سنوية ونصفية وربعية -</li>
                                    </ul>
                                    <button class="btn commonBtn">
                                        سجـل الآن
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
                                            <h4 class="card-title">لغتي قرآني</h4>
                                            <p class="rightTxt">
                                                ويهدف البرنامج الي تطوير لغة الطفل العربية من
                                                خلال آيات القران الكريم التي تحسن من مخارج
                                                الحروف وتساعد بزيادة الحصيلة اللغوية وغرس
                                                القيم الأخلاقية

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer d-md-flex align-items-center justify-content-between">
                                    <ul class="footerText list-unstyled">
                                        <li> منهج مخصص -</li>
                                        <li> إمكانية تقسيط الإشتراك -</li>
                                        <li> تقييم شهري لمستوى الطالب -</li>
                                        <li> خطط علاجية سنوية ونصفية وربعية -</li>
                                    </ul>
                                    <button class="btn commonBtn">
                                        سجـل الآن
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
                                            <h4 class="card-title">إيقاعات <br>
                                                تعليمية</h4>
                                            <p class="rightTxt">
                                                يهدف البرنامج إلي تعليم الأطفال وتحسين مخارج حروفهم
                                                العربية من خلال ترديد الجمل العربية بطريقة غنائية مسلية
                                                ويقام مرة واحدة شهريا باختلاف مكان الحدث
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
                                        سجـل الآن
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
                                            <h4 class="card-title">الفعاليات <br>

                                                و الأنـشطة</h4>
                                            <p class="rightTxt">
                                                بالتعاون مع منتزه خليفة الثقافي وعدد من
                                                الجهات الثقافية
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
                                        سجـل الآن
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
                <h2 class="achivementTitle">أرقام الغرس</h2>

                <div class="achivementCards row row-cols-md-3 row-cols-1 g-5">

                    <div class="col">
                        <div class="card">
                            <img src="{!! url('assets/images/1.png') !!}" alt="achive" class="card-img-top">

                            <div class="card-body text-center">
                                <h2 class="count">9</h2>
                                <p class="countName">فعاليات</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <img src="{!! url('assets/images/2.png') !!}" alt="achive" class="card-img-top">

                            <div class="card-body text-center">
                                <h2 class="count">+999</h2>
                                <p class="countName">حصة منجزة</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{!! url('assets/images/3.png') !!}" alt="achive" class="card-img-top">

                            <div class="card-body text-center">
                                <h2 class="count">+99</h2>
                                <p class="countName">طالب مستفيد</p>
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
            <img src="{!! url('assets/images/icon-12.2.png') !!}" alt="icon" class="img-fluid icon-12">
            <div class="container-fluid">
                <h2 class="algharsTitle">أخبار الغرس</h2>

                <div class="newsSlider">

                    <!-- <div class="row row-cols-md-3 g-5">
                        <div class="col">
                            <div class="singleSlider">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="images/news.png" alt="news" class="img-fluid card-img-top w-50">
                                    </div>
                                    <div class="card-footer">
                                        <h4 class="card-title">NEWS HEADER</h4>
                                        <p class="card-text">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="singleSlider">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="images/news.png" alt="news" class="img-fluid card-img-top w-50">
                                    </div>
                                    <div class="card-footer">
                                        <h4 class="card-title">NEWS HEADER</h4>
                                        <p class="card-text">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="singleSlider">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img src="images/news.png" alt="news" class="img-fluid card-img-top w-50">
                                    </div>
                                    <div class="card-footer">
                                        <h4 class="card-title">NEWS HEADER</h4>
                                        <p class="card-text">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="singleSlider">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="{!! url('assets/images/news.png') !!}" alt="news" class="img-fluid">
                            </div>
                            <div class="card-footer">
                                <h4 class="card-title">العنوان</h4>
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
                                <h4 class="card-title">العنوان</h4>
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
                                <h4 class="card-title">العنوان</h4>
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
                                <h4 class="card-title">العنوان</h4>
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
                <h2 class="registrationTitle">ابدأ مع طفلك رحلة الغرس</h2>
                <div class="row">
                    <div class="col-md-5">
                        <form method="post" action="{{ route('register.perform') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="singleInput">
                                <label for="floatingName"> سم الطالب </label>
                                <input type="text" class="form-control" name="name" value="{{ old('age') }}"
                                    placeholder="Enter Student name" required="required" autofocus>

                                @if ($errors->has('age'))
                                    <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="floatingName">Age of student</label>
                                <input type="text" class="form-control" name="age" value="{{ old('age') }}"
                                    placeholder="Enter your age" required="required" autofocus>

                                @if ($errors->has('age'))
                                    <span class="text-danger text-left">{{ $errors->first('age') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="floatingName"> مر الطالب </label>
                                <input type="text" class="form-control" name="grade" value="{{ old('grade') }}"
                                    placeholder="Enter the Grade" required="required" autofocus>

                                @if ($errors->has('grade'))
                                    <span class="text-danger text-left">{{ $errors->first('grade') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="floatingName"> سم ولي الامر </label>
                                <input type="text" class="form-control" name="p_name" value="{{ old('p_name') }}"
                                    placeholder="Parents Name" required="required" autofocus>

                                @if ($errors->has('p_name'))
                                    <span class="text-danger text-left">{{ $errors->first('p_name') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="floatingName"> قم الجوال </label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}"
                                    placeholder="Phone Number" required="required" autofocus>

                                @if ($errors->has('phone'))
                                    <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email') }}" placeholder="name@example.com" required="required"
                                    autofocus>

                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="username"> اسم المستخدم </label>
                                <input type="text" class="form-control" name="username" id="username"
                                    value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="floatingName"> أدخل الموقع </label>
                                <input type="text" class="form-control" name="location" value="{{ old('location') }}"
                                    placeholder="Enter the Location" required="required" autofocus>

                                @if ($errors->has('location'))
                                    <span class="text-danger text-left">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="singleInput">
                                <label for="floatingName"> اختر البرنامج </label>
                                <select class="form-select" aria-label="Default select example" id="program_name"
                                    name="program_name" value="{{ old('program_name') }}">
                                    <option selected disabled>Choose Program</option>
                                    <option value="1"> واحد </option>
                                    <option value="2"> اثنين </option>
                                    <option value="3"> ثلاثة </option>
                                </select>
                                @if ($errors->has('program_name'))
                                    <span class="text-danger text-left">{{ $errors->first('program_name') }}</span>
                                @endif
                            </div>

                            <div class="singleInput">
                                <label for="floatingName"> فاصيل اخري تريد اضافتها </label>
                                <textarea class="form-control" name="message" value="{{ old('message') }}" placeholder="Enter your message"
                                    required="required" cols="30" rows="5" autofocus style="height: 234px !important;">
                                    </textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger text-left">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <button class="btn commonBtn" type="submit"> جـــل الآن </button>
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
                                            املأ استمارة التسجيل واختر
                                             البرنامج المفضل
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
                                            حدد موعدًا لزيارة التقييم
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
                                            اختر الحزمة المناسبة مع
                                             الأوقات بعد الاطلاع على التقرير
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
                                            تأكد من إتمام الدفع
                                             عملية إلكترونية للتأكيد
                                             تسجيل
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
                                            اتبع مواعيد الجلسات من خلال
                                             التطبيق المخصص
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
                                يحصل <br>
                                <span> الغرس </span>
                            </h2>
                            <h3> التطبيق الآن </h3>
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
                    <div class="col-md-6 contactInfo">
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
@endsection
