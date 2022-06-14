@extends('layouts.app')

@section('content')

@if ( $all_or_review === "empty" )
<h1 class="empty"> Empty Review Command</h1>

@else
<div>
    <div class="process-text"> {{ $command_info['process']; }}</div>
    <div id="answer-text"> answer </div>
    <div id="result-text"> reue or false </div>
</div>

<form method="post">
    @csrf
    <button type="button" id="{{$all_or_review}}"> add or delete </button>
</form>

<div>
    <input type="text" name="answer" id="player-text"> 
    <button class="check-answer-btn"> Enter </button>
</div>

<div>
    <button type="submit" class="show-answer-btn"> Show Answer </button>
    <button type="submit" class="next-quiz-btn"> Next Quiz </button> 
</div>



<script>

$(document).ready(function(){
    changeText();
});

//
// リロード時に表示したくない文字を非表示にする
//
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
    document.getElementById("result-text").innerText = "";
}

//
// 答えを見るボタン
//
$(".show-answer-btn").click(function(){
    document.getElementById("answer-text").innerText = "{{ $command_info['command']; }}";

});

//
// 次のクイズボタン
//
$(".next-quiz-btn").click(function(){
    location.reload();
});

//
// 答え合わせボタン
//
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

//
// クイズとして表示されているコマンドを、review command listに追加または削除するボタン
//
$("#{{$all_or_review}}").click(function(){
    const target_id = "{{ $command_info['id']; }}";

    // add the command to review list
    if("{{$all_or_review}}" == "all"){
        $.ajax({
        url: "reviewcommand",
        type:"POST",
        data:{
            "_token": "{{ csrf_token() }}",
            "id": target_id
        },
        success:function(response){
            console.log(response);
        },
    });
    }
    
    // delete the command from review list
    else if("{{$all_or_review}}" == "review"){
        $.ajax({
            url: "reviewcommand/"+target_id,
            type:"delete",
            data:{
                "_token": "{{ csrf_token() }}",
            },
            success: function(response){
                console.log(response);
                console.log("delete"+target_id+"from review");
            },
            error: function (response) {
                console.log('Error:', response);             
            }
        });
    }    
});

</script>
@endif
@endsection


