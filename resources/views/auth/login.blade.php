<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Flourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <section class="login">
        <h1>فلوريش</h1>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div>
                <h3>اسم المستخدم</h3>
                <input type="email" name="email" placeholder="اسم المستخدم" autocomplete="off">
            </div>
            <div>
                <h3>كلمة المرور</h3>
                <input type="password" name="password" placeholder="كلمة المرور" autocomplete="off">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">تذكرني</label>
            </div>

            <!-- <p>كلمة المرور او اسم المستخدم بهما خطأ , حاول مرة اخري</p> -->

            <button type="submit" name="login">تسجيل دخول</button>
            <div>
                <a href="{{route('register')}}">انشاء حساب</a>
                <a href="#"> هل نسيت كلمة المرور؟</a>

            </div>
        </form>
    </section>

    <script src="{{ asset('assets/js/login.js') }}"></script>
