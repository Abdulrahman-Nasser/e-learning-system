<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/signup.css')}}">
    <title>Flourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<section class="login">
    <h1>فلوريش</h1>
    <form action="{{route('reg.index')}}" method="post">
        @csrf
        <div>

            <div>
                <h3>الاسم الاول</h3>
                <input type="text" name="firstname" placeholder="الاسم الاول" autocomplete="off">
            </div>

            <div>
                <h3>الاسم الثاني</h3>
                <input type="text" name="lastname" placeholder="الاسم الثاني" autocomplete="off">
            </div>

        </div>
        <div>
            <h3>البريد الالكتروني</h3>
            <input type="email" name="email" placeholder="البريد الالكتروني" autocomplete="off">
        </div>
        <div>
            <h3>كلمة المرور</h3>
            <input type="text" name="password" placeholder="كلمة المرور" autocomplete="off">
        </div>
        <div>
            <h3>تأكيد كلمة المرور</h3>
            <div>

                <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" autocomplete="off">
            </div>

        </div>
        <button type="submit" name="signup">انشاء حساب</button>
        <a href="{{route('login')}}">تسجيل دخول</a>
    </form>
</section>

</body>
</html>
