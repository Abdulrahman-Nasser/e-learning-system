<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                @if (empty($examData))
                    لا يوجد اسئلة بعج انتظر
                @else
                    <span class="current">{{ $numQues }}</span>
                    من
                @endif
                <!-- رقم اخر سؤال -->
                <span class="last">10</span>
            </h1>
        </div>
        <form class="question" method="GET">
            @foreach ($examData as $data)
                <h1>{{ $data->question }}</h1>
                @foreach ($answers as $answer)
                    <div class="answers">
                        <div class="answer">
                            <input type="radio" name="answer" value="{{ $answer->choose }}" id="{{ $answer->id }}">
                            <label for="{{ $answer->id }}">{{ $answer->choose }}</label>
                        </div>
                    </div>
                @endforeach
            @endforeach

            @if ($data->ques_num == $lastQuestionNum)
                <button type="button" class="prev-btn">Previous</button>
                <button type="button" class="finish-btn">Finish</button>
            @elseif ($data->ques_num == 1)
                <button type="button" class="next-btn">Next</button>
            @else
                <button type="button" class="next-btn">Next</button>
                <button type="button" class="prev-btn">Previous</button>
            @endif


        </form>

    </div>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>


    {{-- done --}}
    {{-- <script>
        $(document).ready(function() {
            // Function to pre-select the previously chosen answer
            function preselectAnswer() {
                var currentQuestionNum = parseInt($('span.current').text());
                var selectedAnswer = localStorage.getItem('selected_answer_' + currentQuestionNum);
                if (selectedAnswer) {
                    $('input[name="answer"][value="' + selectedAnswer + '"]').prop('checked', true);
                }
            }

            preselectAnswer();

            $('input[name="answer"]').change(function() {
                var selectedAnswer = $(this).val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);
            });

            $('.next-btn').click(function(e) {
                e.preventDefault();
                var formData = $('.question').serialize();
                var selectedAnswer = $('input[name="answer"]:checked').val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);

                var nextQuestionNum = currentQuestionNum + 1;
                $('.question').attr('action',
                    '{{ route('exam.show', ['id' => $data->courseId, 'ques_num' => ':num']) }}'.replace(
                        ':num', nextQuestionNum));

                $('.question').submit();
            });

            $('.prev-btn').click(function(e) {
                e.preventDefault();
                window.history.back();
            });
        });
    </script> --}}





    {{-- <script>
        $(document).ready(function() {
            function preselectAnswer() {
                var currentQuestionNum = parseInt($('span.current').text());
                var selectedAnswer = localStorage.getItem('selected_answer_' + currentQuestionNum);
                if (selectedAnswer) {
                    $('input[name="answer"][value="' + selectedAnswer + '"]').prop('checked', true);
                }
            }

            preselectAnswer();

            $('input[name="answer"]').change(function() {
                var selectedAnswer = $(this).val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);
            });

            $('.next-btn').click(function(e) {
                e.preventDefault();
                var selectedAnswer = $('input[name="answer"]:checked').val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);

                var nextQuestionNum = currentQuestionNum + 1;
                $('.question').attr('action',
                    '{{ route('exam.show', ['id' => $data->courseId, 'ques_num' => ':num']) }}'.replace(
                        ':num', nextQuestionNum));

                $('.question').submit();
            });

            $('.prev-btn').click(function(e) {
                e.preventDefault();
                window.history.back();
            });

            $('.finish-btn').click(function(e) {
                e.preventDefault();
                saveAnswersToDatabase();
            });
        });

        function saveAnswersToDatabase() {
            var selectedAnswers = {};
            for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                var answerKey = 'selected_answer_' + i;
                var selectedAnswer = localStorage.getItem(answerKey);
                selectedAnswers[i] = selectedAnswer;
            }

            var courseId = '{{ $data->courseId }}';

            $.ajax({
                url: '{{ route('exam.save_answers', ['courseId' => ':courseId']) }}'.replace(':courseId',
                    courseId),
                type: 'POST',
                data: {
                    selectedAnswers: selectedAnswers,
                    courseId: courseId,
                    userId: '{{ auth()->user()->id }}',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Answers saved successfully.');
                    for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                        var answerKey = 'selected_answer_' + i;
                        localStorage.removeItem(answerKey);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error saving answers:', error);
                }
            });
        }
    </script> --}}


    {{-- done done --}}
    {{-- <script>
        $(document).ready(function() {
            function preselectAnswer() {
                var currentQuestionNum = parseInt($('span.current').text());
                var selectedAnswer = localStorage.getItem('selected_answer_' + currentQuestionNum);
                if (selectedAnswer) {
                    $('input[name="answer"][value="' + selectedAnswer + '"]').prop('checked', true);
                }
            }

            preselectAnswer();

            $('input[name="answer"]').change(function() {
                var selectedAnswer = $(this).val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);
            });

            $('.next-btn').click(function(e) {
                e.preventDefault();
                var selectedAnswer = $('input[name="answer"]:checked').val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);

                var nextQuestionNum = currentQuestionNum + 1;
                $('.question').attr('action',
                    '{{ route('exam.show', ['id' => $data->courseId, 'ques_num' => ':num']) }}'.replace(
                        ':num', nextQuestionNum));

                $('.question').submit();
            });

            $('.prev-btn').click(function(e) {
                e.preventDefault();
                window.history.back();
            });

            $('.finish-btn').click(function(e) {
                e.preventDefault();
                saveAnswersToDatabase();
            });
        });

        function saveAnswersToDatabase() {
            var selectedAnswers = {};
            for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                var answerKey = 'selected_answer_' + i;
                var selectedAnswer = localStorage.getItem(answerKey);
                // If no answer is selected, store an empty value
                if (!selectedAnswer) {
                    selectedAnswer = ''; // or null
                }
                selectedAnswers[i] = selectedAnswer;
            }

            var courseId = '{{ $data->courseId }}';

            $.ajax({
                url: '{{ route('exam.save_answers', ['courseId' => ':courseId']) }}'.replace(':courseId',
                    courseId),
                type: 'POST',
                data: {
                    selectedAnswers: selectedAnswers,
                    courseId: courseId,
                    userId: '{{ auth()->user()->id }}',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Answers saved successfully.');
                    for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                        var answerKey = 'selected_answer_' + i;
                        localStorage.removeItem(answerKey);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error saving answers:', error);
                }
            });
        }
    </script> --}}


    {{-- doneeeeee --}}
    <script>
        $(document).ready(function() {
            function preselectAnswer() {
                var currentQuestionNum = parseInt($('span.current').text());
                var selectedAnswer = localStorage.getItem('selected_answer_' + currentQuestionNum);
                if (selectedAnswer) {
                    $('input[name="answer"][value="' + selectedAnswer + '"]').prop('checked', true);
                }
            }

            preselectAnswer();

            $('input[name="answer"]').change(function() {
                var selectedAnswer = $(this).val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);
            });

            $('.next-btn').click(function(e) {
                e.preventDefault();
                var selectedAnswer = $('input[name="answer"]:checked').val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer ||
                    ''); // Save empty string if no answer is selected

                var nextQuestionNum = currentQuestionNum + 1;
                $('.question').attr('action',
                    '{{ route('exam.show', ['id' => $data->courseId, 'ques_num' => ':num']) }}'.replace(
                        ':num', nextQuestionNum));

                $('.question').submit();
            });

            $('.prev-btn').click(function(e) {
                e.preventDefault();
                window.history.back();
            });

            $('.finish-btn').click(function(e) {
                e.preventDefault();
                saveAnswersToDatabase();
            });
        });

        function saveAnswersToDatabase() {
            var selectedAnswers = {};
            for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                var answerKey = 'selected_answer_' + i;
                var selectedAnswer = localStorage.getItem(answerKey);
                // If no answer is selected, store an empty value
                if (!selectedAnswer) {
                    selectedAnswer = ''; // or null
                }
                selectedAnswers[i] = selectedAnswer;
            }

            var courseId = '{{ $data->courseId }}';
            var userId = '{{ auth()->user()->id }}';

            $.ajax({
                url: '{{ route('exam.save_answers', ['courseId' => ':courseId']) }}'.replace(':courseId',
                    courseId),
                type: 'POST',
                data: {
                    selectedAnswers: selectedAnswers,
                    courseId: courseId,
                    userId: userId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Answers saved successfully.');
                    // Redirect to the exam score route with courseId and userId as parameters
                    window.location.href = '{{ route('exam.score', ['courseId' => ':courseId']) }}'.replace(
                        ':courseId',
                        courseId) ;
                },
                error: function(xhr, status, error) {
                    console.error('Error saving answers:', error);
                }
            });
        }



    </script>

    {{-- using localstorage storage --}}
    {{-- <script>
        $(document).ready(function() {
            function preselectAnswer() {
                var currentQuestionNum = parseInt($('span.current').text());
                var selectedAnswer = localStorage.getItem('selected_answer_' + currentQuestionNum);
                if (selectedAnswer) {
                    $('input[name="answer"][value="' + selectedAnswer + '"]').prop('checked', true);
                }
            }

            preselectAnswer();

            $('input[name="answer"]').change(function() {
                var selectedAnswer = $(this).val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);
            });

            $('.next-btn').click(function(e) {
                e.preventDefault();
                var selectedAnswer = $('input[name="answer"]:checked').val();
                var currentQuestionNum = parseInt($('span.current').text());
                localStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer ||
                    ''); // Save empty string if no answer is selected

                var nextQuestionNum = currentQuestionNum + 1;
                $('.question').attr('action',
                    '{{ route('exam.show', ['id' => $data->courseId, 'ques_num' => ':num']) }}'.replace(
                        ':num', nextQuestionNum));

                $('.question').submit();
            });

            $('.prev-btn').click(function(e) {
                e.preventDefault();
                window.history.back();
            });

            $('.finish-btn').click(function(e) {
                e.preventDefault();
                saveAnswersToDatabase();
            });
        });

        function saveAnswersToDatabase() {
            var selectedAnswers = {};
            for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                var answerKey = 'selected_answer_' + i;
                var selectedAnswer = localStorage.getItem(answerKey);
                // If no answer is selected, store an empty value
                if (!selectedAnswer) {
                    selectedAnswer = ''; // or null
                }
                selectedAnswers[i] = selectedAnswer;
            }

            var courseId = '{{ $data->courseId }}';
            var userId = '{{ auth()->user()->id }}';

            $.ajax({
                url: '{{ route('exam.save_answers', ['courseId' => ':courseId']) }}'.replace(':courseId',
                    courseId),
                type: 'POST',
                data: {
                    selectedAnswers: selectedAnswers,
                    courseId: courseId,
                    userId: userId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Answers saved successfully.');
                    // Redirect to the exam score route with courseId and userId as parameters
                    window.location.href = '{{ route('exam.score', ['courseId' => ':courseId']) }}'.replace(
                        ':courseId',
                        courseId) ;
                },
                error: function(xhr, status, error) {
                    console.error('Error saving answers:', error);
                }
            });
        }



    </script> --}}

    {{-- using session storage --}}
    {{-- <script>
        $(document).ready(function() {
            function preselectAnswer() {
                var currentQuestionNum = parseInt($('span.current').text());
                var selectedAnswer = sessionStorage.getItem('selected_answer_' + currentQuestionNum);
                if (selectedAnswer) {
                    $('input[name="answer"][value="' + selectedAnswer + '"]').prop('checked', true);
                }
            }

            preselectAnswer();

            $('input[name="answer"]').change(function() {
                var selectedAnswer = $(this).val();
                var currentQuestionNum = parseInt($('span.current').text());
                sessionStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer);
            });

            $('.next-btn').click(function(e) {
                e.preventDefault();
                var selectedAnswer = $('input[name="answer"]:checked').val();
                var currentQuestionNum = parseInt($('span.current').text());
                sessionStorage.setItem('selected_answer_' + currentQuestionNum, selectedAnswer ||
                    ''); // Save empty string if no answer is selected

                var nextQuestionNum = currentQuestionNum + 1;
                $('.question').attr('action',
                    '{{ route('exam.show', ['id' => $data->courseId, 'ques_num' => ':num']) }}'.replace(
                        ':num', nextQuestionNum));

                $('.question').submit();
            });

            $('.prev-btn').click(function(e) {
                e.preventDefault();
                window.history.back();
            });

            $('.finish-btn').click(function(e) {
                e.preventDefault();
                saveAnswersToDatabase();
            });
        });

        function saveAnswersToDatabase() {
            var selectedAnswers = {};
            for (var i = 1; i <= {{ $lastQuestionNum }}; i++) {
                var answerKey = 'selected_answer_' + i;
                var selectedAnswer = sessionStorage.getItem(answerKey);
                // If no answer is selected, store an empty value
                if (!selectedAnswer) {
                    selectedAnswer = ''; // or null
                }
                selectedAnswers[i] = selectedAnswer;
            }

            var courseId = '{{ $data->courseId }}';
            var userId = '{{ auth()->user()->id }}';

            $.ajax({
                url: '{{ route('exam.save_answers', ['courseId' => ':courseId']) }}'.replace(':courseId',
                    courseId),
                type: 'POST',
                data: {
                    selectedAnswers: selectedAnswers,
                    courseId: courseId,
                    userId: userId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Answers saved successfully.');
                    // Redirect to the exam score route with courseId and userId as parameters
                    window.location.href = '{{ route('exam.score', ['courseId' => ':courseId']) }}'.replace(
                        ':courseId',
                        courseId);
                },
                error: function(xhr, status, error) {
                    console.error('Error saving answers:', error);
                }
            });
        }
    </script> --}}






</body>

</html>
