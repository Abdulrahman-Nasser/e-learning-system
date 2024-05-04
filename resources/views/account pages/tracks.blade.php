<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/my courses.css')}}">
    <title>Flourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
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
                    <li class="dd active">
                        <a href="account.html" class="active">حسابي</a>
                        <div class="settings">
                            <a href="setting.html">ضبط الحساب</a>
                            <a href="courses.html">دوراتي</a>
                            <a href="tracks.html">مساراتي</a>
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
                    <li><a href="account.html" class="active">حسابي</a></li>
                </ul>
            </div>
            <h1 class="logo"><a href="../index.html">فلوريش</a></h1>
            <a href="../login & sign up/login.html">انضم الينا</a>
        </div>
    </div>
</header>
<!-- header end -->

<!-- courses or tracks start -->
<section class="home-tracks">
    <div class="container">
        <h1>دوراتي</h1>
        <div class="my-tracks">

            <div class="my-track">
                <img src="{{asset('assets/imgs/back end.png')}}" alt="">
                <div class="shape">
                    <h3>
                        تمت المشاهدة
                        <span>70%</span>
                    </h3>
                    <h3>
                        <span style="width: 70%"></span>
                    </h3>
                </div>
                <a href="../course page/course-details.html" target="_blank">باك اند</a>
            </div>

            <div class="my-track">
                <img src="{{asset('assets/imgs/back end.png')}}" alt="">
                <div class="shape">
                    <h3>
                        تمت المشاهدة
                        <span>100%</span>
                    </h3>
                    <h3>
                        <span style="width: 100%"></span>
                    </h3>
                </div>
                <a href="{{asset('assets/imgs/back end.png')}}" target="_blank">فرونت اند</a>
            </div>

            <div class="my-track">
                <img src="{{asset('assets/imgs/back end.png')}}" alt="">
                <div class="shape">
                    <h3>
                        تمت المشاهدة
                        <span>10%</span>
                    </h3>
                    <h3>
                        <span style="width: 10%"></span>
                    </h3>
                </div>
                <a href="{{asset('assets/imgs/back end.png')}}" target="_blank">فرونت اند</a>
            </div>

            <div class="my-track">
                <img src="{{asset('assets/imgs/back end.png')}}" alt="">
                <div class="shape">
                    <h3>
                        تمت المشاهدة
                        <span>90%</span>
                    </h3>
                    <h3>
                        <span style="width: 90%"></span>
                    </h3>
                </div>
                <a href="../course page/course-details.html" target="_blank">فرونت اند</a>
            </div>

            <div class="my-track">
                <img src="{{asset('assets/imgs/back end.png')}}" alt="">
                <div class="shape">
                    <h3>
                        تمت المشاهدة
                        <span>30%</span>
                    </h3>
                    <h3>
                        <span style="width: 30%"></span>
                    </h3>
                </div>
                <a href="../course page/course-details.html" target="_blank">فرونت اند</a>
            </div>

            <div class="my-track">
                <img src="{{asset('assets/imgs/back end.png')}}" alt="">
                <div class="shape">
                    <h3>
                        تمت المشاهدة
                        <span>50%</span>
                    </h3>
                    <h3>
                        <span style="width: 50%"></span>
                    </h3>
                </div>
                <a href="{{asset('assets/imgs/back end.png')}}" target="_blank">فرونت اند</a>
            </div>
        </div>
    </div>
</section>
<!-- courses or tracks end -->

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
<script src="{{asset('assets/js/video.js')}}"></script>
<script src="{{asset('assets/js/mobile header.js')}}"></script>
<script src="{{asset('assets/js/courses and tracks.js')}}"></script>
<!-- <script src="js/script2.js"></script> -->
</body>
</html>
