<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/lesson.css') }}">
    <title>Flourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <!-- <script src="js/main.js"></script> -->
</head>

<body>
    <!-- header start -->
    <header id="header">
        <div class="container">
            <div class="desktop">
                <h1 class="logo"><a href="../index.html">فلوريش</a></h1>
                <div class="links">
                    <ul>
                        <li><a href="../index.html">الرئيسية</a></li>
                        <li><a href="../about.html">نبذه عنا</a></li>
                        <li><a href="../courses.html">الدورات</a></li>
                        <li><a href="../tracks.html">المسارات التعليمية</a></li>
                        <li><a href="../team.html">المدربين</a></li>
                        <li class="dd">
                            <a href="../account pages/account.html">حسابي</a>
                            <div class="settings">
                                <a href="../account pages/setting.html">ضبط الحساب</a>
                                <a href="../account pages/courses.html">دوراتي</a>
                                <a href="../account pages/tracks.html">دبلوماتي</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="../login & sign up/login.html">انضم الينا</a>
            </div>
            <!-- mobile header -->
            <div class="mobile">
                <div class="links">
                    <button class="list">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <ul>
                        <li><a href="../index.html">الرئيسية</a></li>
                        <li><a href="../about.html">نبذه عنا</a></li>
                        <li><a href="../courses.html">الدورات</a></li>
                        <li><a href="../tracks.html">المسارات التعليمية</a></li>
                        <li><a href="../team.html">المدربين</a></li>
                        <li><a href="../account pages/account.html">حسابي</a></li>
                    </ul>
                </div>
                <h1 class="logo"><a href="../index.html">فلوريش</a></h1>
                <a href="../login & sign up/login.html">انضم الينا</a>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- home start -->
    <section class="landing" id="landing">
        <div class="container">
            <div class="home">
                <h1>HTML</h1>
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- lesson start -->
    <section class="lesson">
        <div class="container">
            <div class="lesson-details">
                <div class="lesson-info">
                    <div class="details">
                        <h1>نبذة عن {{ $course->name }}</h1>
                        <p>
                            {{ $course->descraption }}
                        </p>
                        <img src="{{ asset($course->image) }}" alt="">
                    </div>
                    <div class="features">
                        <h1>تفاصيل الكورس</h1>
                        <div class="feature">
                            <h3>المحاضر :</h3>
                            <h3>{{ $course->ins_name }}</h3>
                        </div>
                        <div class="feature">
                            <h3> عدد الدروس :</h3>
                            <h3>{{ $course->num_lec }}</h3>
                        </div>
                        <div class="feature">
                            <h3> مدة الكورس :</h3>
                            <h3>{{ $course->duartion }}h</h3>
                        </div>
                        <div class="feature">
                            <h3>المستوي :</h3>
                            <h3>جميع المستويات</h3>
                        </div>
                        <div class="feature">
                            <h3>اللغة :</h3>
                            <h3>العربية</h3>
                        </div>
                        <form>
                            <a href="{{ route('view.index', [$course->name, $course->id]) }}">ادرس الكورس</a>
                        </form>
                    </div>
                </div>

                {{-- checking authentication --}}
                @auth
                    <div class="content">
                        <h1>دروس كورس HTML</h1>
                        <div class="videos">
                            <!-- video 1 -->
                            @foreach ($video as $vid)
                                <div class="v-detail">
                                    <h1 class="num">1</h1>

                                    <div class="name-time">
                                        <h1>{{ $vid->name }}</h1>
                                        <h1>{{ $vid->duration }}</h1>
                                    </div>


                                    <!-- continue with back end -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endauth
            </div>
    </section>
    <!-- lesson end -->

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo">
                        <h1>فلوريش</h1>
                        <p>مكانك للوصول الي اكبر استفادة ممكنة</p>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="adress">
                        <h1>تواصل معنا</h1>
                        <h3><i class="fa-solid fa-location-dot"></i> الكوامل ش الجامعة الجديدة</h3>
                        <h3><i class="fa-solid fa-phone"></i> 0100223344</h3>
                        <h3><i class="fa-solid fa-envelope"></i> info@gmail.com</h3>
                        <h1>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </h1>
                    </div>
                    <div class="courses-links">
                        <h1>دوراتنا</h1>
                        <a href="#">جافا سكريبت</a>
                        <a href="#">جافا سكريبت</a>
                        <a href="#">جافا سكريبت</a>
                        <a href="#">جافا سكريبت</a>
                        <a href="#">جافا سكريبت</a>
                    </div>
                    <div class="tracks-links">
                        <h1>مساراتنا</h1>
                        <a href="#">فرونت اند</a>
                        <a href="#">فرونت اند</a>
                        <a href="#">فرونت اند</a>
                        <a href="#">فرونت اند</a>
                        <a href="#">فرونت اند</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button class="top"><i class="fa-solid fa-angles-up"></i></button>

    <!-- <script src="js/main.js"></script> -->
    <script src="{{ asset('assets/js/mobile header.js') }}"></script>
    <script src="{{ asset('assets/js/courses and tracks.js') }}"></script>
    <!-- <script src="js/script2.js"></script> -->
</body>

</html>
