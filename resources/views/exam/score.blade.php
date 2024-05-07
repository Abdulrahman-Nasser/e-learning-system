<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flourish</title>
    <link rel="stylesheet" href="{{ asset('assets/css/score.css') }}">
</head>

<body>
    <div class="score">
        <h1>
            درجتك في الاختبار هي :
            <!-- درجة الطالب -->
            <span>{{ $degree->exam_score }}</span>
            من
            <!-- درجة الامتحان الكلي -->
            <span>10</span>
        </h1>

        <a href="{{ route('view.index', $degree->courseId) }}"> العودة الى قائمة الدروس</a>
    </div>
</body>

</html>
