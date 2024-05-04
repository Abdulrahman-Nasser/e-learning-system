<!-- header start -->
<header id="header">
    <div class="container">
        <div class="desktop">
            <h1 class="logo"><a href="{{ route('home.index') }}">فلوريش</a></h1>
            <div class="links">
                <ul>
                    <li class="active"><a href="{{ route('home.index') }}" class="active">الرئيسية</a></li>
                    <li><a href="{{ route('about.index') }}">نبذه عنا</a></li>
                    <li><a href="{{ route('track.index') }}">الدورات</a></li>
                    <li><a href="{{ route('diploma.index') }}">المسارات التعليمية</a></li>
                    <li><a href="team.html">المدربين</a></li>
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
            @auth
            <a href="{{ route('logout') }}">تسجيل خروج </a>

            @endauth
            @guest
            <a href="{{ route('login') }}">انضم الينا</a>

            @endguest
        </div>
        <!-- mobile header -->
        <div class="mobile">
            <div class="links">
                <button class="list">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <ul>
                    <li><a href="{{ route('home.index') }}" class="active">الرئيسية</a></li>
                    <li><a href="{{ route('about.index') }}">نبذه عنا</a></li>
                    <li><a href="{{ route('track.index') }}">الدورات</a></li>
                    <li><a href="{{ route('diploma.index') }}">المسارات التعليمية</a></li>
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
