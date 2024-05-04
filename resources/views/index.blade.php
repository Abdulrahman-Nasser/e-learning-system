@extends('layouts.app')


@section('content')
    @include('shared.nav')
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>منصة فلوريش التعليمية</h1>
                <form method="get">
                    <div class="details">
                        <button type="button" id="button">الدورات <i class="fa-solid fa-caret-down"></i></button>
                        <div class="dropdown hide">
                            <a href="#">دورة 1</a>
                            <a href="#">دورة 2</a>
                            <a href="#">دورة 3</a>
                        </div>
                    </div>
                    <input type="text" name="keyword" placeholder="كلمة افتاحية" autocomplete="off">
                    <button type="submit" name="search" value="from database">بحث</button>
                </form>
            </div>
        </div>
    </section>




    <!-- home end -->

    <!-- about us start -->
    <section class="about" id="about" style="overflow: hidden;">
        <div class="container">
            <div class="about-us">
                <div class="img">
                    <img src="{{ asset('assets/imgs/front-view-boy-holding-laptop-while-wearing-virtual-reality-headset.jpg') }}"
                        alt="">

                </div>
                <div class="about-details">
                    <h4>نبذه عنا</h4>
                    <h1>الاختيار الأول للتعليم عبر الإنترنت في أي مكان</h1>
                    <p>
                        هاياي ليليلي ليليليل سستلاستا شمنءتمنء اؤلاتايؤلا تاؤتؤاست تسءاتسؤتسا
                        ؤ تساؤتاسؤتسؤاس تساؤتاؤتؤا ستؤلاتؤستؤ
                    </p>
                    <div class="nums">
                        <div class="num">
                            <h1 data-goal="123" class="count">0</h1>
                            <p>المواضيع المتاحة</p>
                        </div>
                        <div class="num">
                            <h1 data-goal="1234" class="count">0</h1>
                            <p>الدورات الاونلاين</p>
                        </div>
                        <div class="num">
                            <h1 data-goal="123" class="count">0</h1>
                            <p>مهارات المدربين</p>
                        </div>
                        <div class="num">
                            <h1 data-goal="1234" class="count">0</h1>
                            <p>الطلاب السعداء</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end -->

    <!-- choose us start -->
    <section class="choose-us" id="choose" style="overflow: hidden;">
        <div class="container">
            <div class="choose-content">
                <div class="img">
                    <img src="{{ asset('assets/imgs/stock-vector-education-tree-of-knowledge-and-open-book-effective-modern-education-template-design-back-to-767491552.jpg') }}"
                        alt="">
                </div>
                <div class="choose-details">
                    <h4>ليه تختارنا</h4>
                    <h1>لماذا يجب عليك بدأ التعلم معنا ؟</h1>
                    <p>
                        هاياي ليليلي ليليليل سستلاستا شمنءتمنء اؤلاتايؤلا تاؤتؤاست تسءاتسؤتسا
                        ؤ تساؤتاسؤتسؤاس تساؤتاؤتؤا ستؤلاتؤستؤ
                    </p>
                    <div class="features">
                        <div class="feature">
                            <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                            <div class="detail">
                                <h1>المدربين المهرة</h1>
                                <p>ايايب سبغفسبغفس فءغغسغ غيبغيبلا عيغيي يبفيب غيبيف</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="icon"><i class="fa-solid fa-certificate"></i></div>
                            <div class="detail">
                                <h1>شهادة دولية</h1>
                                <p>ايايب سبغفسبغفس فءغغسغ غيبغيبلا عيغيي يبفيب غيبيف</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="icon"><i class="fa-solid fa-book-open-reader"></i></div>
                            <div class="detail">
                                <h1>دروس على الأنترنت</h1>
                                <p>ايايب سبغفسبغفس فءغغسغ غيبغيبلا عيغيي يبفيب غيبيف</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose us end -->

    <!-- courses start -->
    <section class="our-courses" id="our-courses" style="overflow: hidden;">
        <div class="container">
            <div class="courses-content">
                <h4>اشهر الدورات</h4>
                <h1>اكتشف اشهر الدورات التي نقدمها لك</h1>
                <div class="arrow" id="left"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="courses">
                    <div class="course">
                        <h1>جافا سكريبت</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>احمد السيد</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="course page/course-details.html" target="_blank">تفاصيل الدورة</a>
                        </div>
                    </div>
                    <div class="course">
                        <h1>جافا سكريبت</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>شيرين متولي</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="course page/course-details.html" target="_blank">تفاصيل الدورة</a>
                        </div>
                    </div>
                    <div class="course">
                        <h1>جافا سكريبت</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>يوسف امام</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="course page/course-details.html" target="_blank">تفاصيل الدورة</a>
                        </div>
                    </div>
                    <div class="course">
                        <h1>جافا سكريبت</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>رنا يسري</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="course page/course-details.html" target="_blank">تفاصيل الدورة</a>
                        </div>
                    </div>
                    <div class="course">
                        <h1>جافا سكريبت</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>تسنيم احمد</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="course page/course-details.html" target="_blank">تفاصيل الدورة</a>
                        </div>
                    </div>
                    <div class="course">
                        <h1>جافا سكريبت</h1>
                        <div class="rate">
                            <h1><i class="fa-solid fa-user"></i>ابو الوفا محمد</h1>
                            <h1><i class="fa-solid fa-star"></i>4.5</h1>
                        </div>
                        <div class="course-detail">
                            <a href="course page/course-details.html" target="_blank">تفاصيل الدورة</a>
                        </div>
                    </div>
                </div>
                <div class="arrow" id="right"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>
    <!-- courses end -->

    <!-- tracks start -->
    <section class="tracks" id="tracks" style="overflow: hidden;">
        <div class="container">
            <div class="tracks-content">
                <h4>اشهر المسارات</h4>
                <h1>تعلم اشهر المسارات المتاحة التي تؤهلك الي سوق العمل</h1>
                <div class="arrow" id="left"><i class="fa-solid fa-arrow-left"></i></div>
                <div class="tracks-details">
                    <div class="track">
                        <img src="{{ asset('assets/imgs/frontendSmallBanner.jpg') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>فرونت اند</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/back end.png') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>باك اند</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/data base.png') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>قواعد البيانات</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/cyber-security-uc.jpeg') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>الشبكات</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="imgs/ai .jpg" alt="">
                        <a href="course page/course-details.html" target="_blank">
                            <h3>الذكاء الاصطناعي</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/data science.jpg') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>تحليل البيانات</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/UIUX.png') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>تصميم وجهة المستخدم</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/desktop app.png') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>تطبيقات سطح المكتب</h3>
                        </a>
                    </div>

                    <div class="track">
                        <img src="{{ asset('assets/imgs/full stack.jpg') }}" alt="">

                        <a href="course page/course-details.html" target="_blank">
                            <h3>باك & فرونت</h3>
                        </a>
                    </div>
                </div>
                <div class="arrow" id="right"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
        </div>
    </section>
    <!-- tracks end -->

    <!-- contct end -->
    <section class="contact" id="contact" style="overflow: hidden;">
        <div class="container">
            <div class="contact-us">
                <div class="location">
                    <div class="info">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="details">
                            <h1>موقعنا</h1>
                            <p>الكوامل ش الجامعة الجديدة</p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="details">
                            <h1>اتصل بنا</h1>
                            <p>010011223344</p>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="details">
                            <h1>ارسل بريد الكتروني</h1>
                            <p>info@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <h4>تواصل معنا</h4>
                    <h1>ارسل لنا رسالتك</h1>
                    <form action="" method="post">
                        <input type="text" name="name" placeholder="اسمك">
                        <input type="email" name="email" placeholder="بريدك الالكتروني">
                        <input type="text" name="subject" placeholder="عنوان الموضوع">
                        <textarea name="messsage" placeholder="رسالتك"></textarea>
                        <button type="submit" name="send">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->
    @include('shared.footer')
@endsection

</body>

</html>
