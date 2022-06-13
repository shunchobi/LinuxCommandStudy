@extends('layouts.app')

@section('content')

<div>
    <div class="process-text"> {{ $command_info['process'] }}</div>
    <div class="result-text"> true </div>
</div>

<form>
    <button type="button" id="{{$all_or_review}}"> add or delete </button>
    <input type="text" name="answer" class="answer-text"> 
    <button type="submit" class="check-answer-btn"> Enter </button>
</form>

<div>
    <button type="submit" class="show-answer-btn"> Answer </button>
    <button type="submit" class="next-quiz-btn"> Next Quiz </button> 
</div>

<script> chabgeText(); </script>
@endsection


<script>
//class="{{$all_or_review}}"の、add or delete を$all_or_reviewの値によって変更する。
//class="result-text"の、true fadeOutしておき、Enter, Answerボタンが押されたときに値を変えてfadeInする。
//class="next-quiz-btn ボタンが押されたらページをリロードする。
function changeText(){
var add_or_delete = "";
if("{{$all_or_review}}" == "all"){
    add_or_delete = "add to review list";
}
else if("{{$all_or_review}}" == "review"){
    add_or_delete = "delete from review list";
}
document.getElementById("{{$all_or_review}}").innerText = add_or_delete;
}
</script>
