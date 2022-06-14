@extends('layouts.app')

@section('content')

<div>
    <div class="process-text"> {{ $command_info['process']; }}</div>
    <div id="answer-text"> answer </div>
    <div id="result-text"> reue or false </div>
</div>

<div>
    <button type="button" id="{{$all_or_review}}"> add or delete </button>
    <input type="text" name="answer" id="player-text"> 
    <button class="check-answer-btn"> Enter </button>
</div>

<div>
    <button type="submit" class="show-answer-btn"> Show Answer </button>
    <button type="submit" class="next-quiz-btn"> Next Quiz </button> 
</div>


<!-- <script> changeText(); </script> -->



<script>

$(document).ready(function(){
    changeText();
});


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
    document.getElementById("answer-text").innerText = "";
}

$(".show-answer-btn").click(function(){
    document.getElementById("answer-text").innerText = "{{ $command_info['command']; }}";

});

$(".next-quiz-btn").click(function(){
    location.reload();
});

$(".check-answer-btn").click(function(){
    const result = "{{ $command_info['command']; }}";
    const player_result = $("#player-text").val();

    if (result == player_result){
        $("#result-text").text("true");
    }
    else{
        $("#result-text").text("false");
    }

    console.log(result);
    console.log(player_result);
});

</script>

@endsection


