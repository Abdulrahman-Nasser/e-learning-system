<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/check.css')}}">
    <title>Flourish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<section class="check">
    <div>
        <h1>تحقق</h1>
        <h3>ادخل رمز التحقق المرسل الي بريدك الالكتروني المنتهي (********@gmail.com)</h3>
    </div>
    <form action="" method="post">
        <div class="nums">
            <input type="text" name="num1" autocomplete="off">
            <input type="text" name="num2" autocomplete="off">
            <input type="text" name="num3" autocomplete="off">
            <input type="text" name="num4" autocomplete="off">
        </div>

        <button type="submit" name="check">تأكيد</button>
        <div>
            <p>اذا لم تتلقي الرمز ؟</p>
            <button type="submit" name="resend">اعادة ارسال</button>

        </div>
    </form>
</section>

<!-- <script src="../js/login.js"></script> -->
</body>
</html>
