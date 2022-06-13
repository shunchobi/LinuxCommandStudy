@extends('layouts.app')

@section('content')

<!-- 
    command_info
    all_or_review
-->

{{--
<form action="/action_page.php" method="get">
  Choose your favorite subject:
  <button name="subject" type="submit" value="HTML">HTML</button>
  <button name="subject" type="submit" value="CSS">CSS</button>
</form>
--}}

{{--
<form method="POST" action="sample.cgi">

    <p>お名前：<input type="text" name="NAME" value="shun"></p>

    <p>メールアドレス：<input type="text" name="email"></p>

    <p><input type="submit" value="送信する"></p>

    <p><input type="reset" value="取消する"></p>

</form>
--}}

<form>}
    <div>
        <div class="process-text"> {{ $command_info['process'] }}</div>
        <div class="result-text"> true </div>
    </div>

    <div>
        <button type="button" class="{{$all_or_review}}"> Add_remove </button>
        <input type="text" class="answer-text"> 
        <button type="submit" class="check-answer-btn"> Enter </button>
    </div>

    <div>
        <button type="submit" class="show-answer-btn"> Answer </button>
        <button type="submit" class="next-quiz-btn"> Next Quiz </button> 

    </div>
</form>


@endsection