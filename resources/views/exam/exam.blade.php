<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flourish</title>
    <link rel="stylesheet" href="{{ asset('assets/css/exam.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="exam">
        <div class="header">
            <h1>
                سؤال رقم :
                <!-- رقم السؤال الحالي -->
                <span class="current">{{ $examData->ques_num }}</span>
                من
                <!-- رقم اخر سؤال -->
                <span class="last">10</span>
            </h1>
        </div>
        <form class="question" method="GET">
            <input type="hidden" name="ques_num" value="{{ $examData->ques_num }}">
            <h1> {{ $examData->questionName }}؟</h1>
            <div class="answers">
                <div class="answer">
                    <input type="radio" name="answer" value="{{ $examData->chose1 }}" id="1">
                    <label for="1">{{ $examData->chose1 }}</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer" value="{{ $examData->chose2 }}" id="2">
                    <label for="2">{{ $examData->chose2 }}</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer" value="{{ $examData->chose3 }}" id="3">
                    <label for="3">{{ $examData->chose3 }}</label>
                </div>
                <div class="answer">
                    <input type="radio" name="answer" value="{{ $examData->chose4 }}" id="4">
                    <label for="4">{{ $examData->chose4 }}</label>
                </div>
            </div>

            <a href="{{ route('exam.previous', [$examData->course_id, $examData->ques_num]) }}">السابق</a>
            <a href="{{ route('exam.next', [$examData->course_id, $examData->ques_num]) }}">التالي</a>
            <button type="submit">انهاء الاختبار</button>

        </form>

    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>






</body>

</html>
