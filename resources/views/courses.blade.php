<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/courses-style.css') }}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            <h1 class="logo"><a href="index.html">فلوريش</a></h1>
            <div class="links">
                <ul>
                    <li><a href="index.html">الرئيسية</a></li>

                    <li class="active"><a href="#" class="active">الدورات</a></li>
                    <li><a href="tracks.html">المسارات التعليمية</a></li>
                    <li><a href="team.html">المدربين</a></li>
                    <li><a href="about.html">نبذه عنا</a></li>
                    <li class="dd">
                        <a href="account pages/account.html">حسابي</a>
                        <div class="settings">
                            <a href="account pages/setting.html">ضبط الحساب</a>
                            <a href="account pages/courses.html">دوراتي</a>
                            <a href="account pages/tracks.html">دبلوماتي</a>
                        </div>
                    </li>
                </ul>
            </div>
            <a href="login & sign up/login.html">انضم الينا</a>
        </div>
        <!-- mobile header -->
        <div class="mobile">
            <div class="links">
                <button class="list">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <ul>
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="about.html">نبذه عنا</a></li>
                    <li><a href="courses.html"  class="active">الدورات</a></li>
                    <li><a href="tracks.html">المسارات التعليمية</a></li>
                    <li><a href="team.html">المدربين</a></li>
                    <li><a href="account pages/account.html">حسابي</a></li>
                </ul>
            </div>
            <h1 class="logo"><a href="index.html">فلوريش</a></h1>
            <a href="login & sign up/login.html">انضم الينا</a>
        </div>
    </div>
</header>
<!-- header end -->

<!-- home start -->
<section class="landing" id="landing">
    <div class="container">
        <div class="home">
            <h1>دورات تعليمية</h1>
        </div>
    </div>
</section>
<!-- home end -->

<!-- courses start -->
<section class="tracks" id="tracks">
    <div class="container">
        <div class="tracks-content">
            <h4>اشهر الدورات</h4>
            <h1>اكتشف اشهر الدورات التي نقدمها لك</h1>
            <div class="tracks2-details">
                @foreach($tracks as $track)
                <div class="track">
                    <a href="{{ route('courses.index', $track->id) }}" target="_blank"><img src="{{ asset($track->image) }}" alt=""></a>
                    <h3>{{$track->name}}</h3>

                </div>
                @endforeach


        </div>
            <div style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;Margin-top:30px">
                {{ $tracks->links() }}
            </div>



        </div>

    </div>

</section>



<!-- courses end -->

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
                    <a href="course page/course-details.html" target="_blank">جافا سكريبت</a>
                    <a href="course page/course-details.html" target="_blank">جافا سكريبت</a>
                    <a href="course page/course-details.html" target="_blank">جافا سكريبت</a>
                    <a href="course page/course-details.html" target="_blank">جافا سكريبت</a>
                    <a href="course page/course-details.html" target="_blank">جافا سكريبت</a>
                </div>
                <div class="tracks-links">
                    <h1>مساراتنا</h1>
                    <a href="course page/course-details.html" target="_blank">فرونت اند</a>
                    <a href="course page/course-details.html" target="_blank">فرونت اند</a>
                    <a href="course page/course-details.html" target="_blank">فرونت اند</a>
                    <a href="course page/course-details.html" target="_blank">فرونت اند</a>
                    <a href="course page/course-details.html" target="_blank">فرونت اند</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<button class="top"><i class="fa-solid fa-angles-up"></i></button>

<!-- <script src="js/main.js"></script> -->
<script src="{{ asset('assets/js/mobile_header.js') }}"></script>
<script src="{{ asset('assets/js/courses_and_tracks.js') }}"></script>

<!-- <script src="js/script2.js"></script> -->
</body>
</html>
