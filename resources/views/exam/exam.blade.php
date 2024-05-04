<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flourish</title>
    <link rel="stylesheet" href="{{asset('assets/css/exam.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<div class="exam">
    <div class="header">
        <h1>
            سؤال رقم :
            <!-- رقم السؤال الحالي -->
            <span class="current">10</span>
            من
            <!-- رقم اخر سؤال -->
            <span class="last">10</span>
        </h1>
    </div>
    <form class="question" method="get">
        <h1>السؤال الاول......؟</h1>
        <div class="answers">
            <div class="answer">
                <input type="radio" name="answer" value="الاجابه رقم 1" id="1">
                <label for="1">الاجابه رقم 1</label>
            </div>
            <div class="answer">
                <input type="radio" name="answer" value="الاجابه رقم 2" id="2">
                <label for="2">الاجابه رقم 2</label>
            </div>
            <div class="answer">
                <input type="radio" name="answer" value="الاجابه رقم 3" id="3">
                <label for="3">الاجابه رقم 3</label>
            </div>
            <div class="answer">
                <input type="radio" name="answer" value="الاجابه رقم 4" id="4">
                <label for="4">الاجابه رقم 4</label>
            </div>
        </div>
    </form>
    <form class="footer" method="get">
        <button type="submit" name="next">التالي</button>
        <button type="submit" name="finish">انهاء الاختبار</button>
        <button type="submit" name="back">السابق</button>
    </form>
</div>

<script src="{{asset('assets/js/exam.js')}}"></script>
</body>
</html>
