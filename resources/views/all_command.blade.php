@extends('layouts.app')

@section('content')

<div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
  Thank you for getting in touch! 
</div>

<a href="{{ route('quiz.index', ['all_or_review' => 'all']) }}">Random Quiz</a>

@foreach ($allCommands as $key => $value)
    <form method="post">
    @csrf
        <button class="button" type="button" data-id="{{$allCommands[$key]['id']}}" name="name"> 追加 </button>
        {{ $allCommands[$key]['id'].$allCommands[$key]['command'].$allCommands[$key]['howtouse'].$allCommands[$key]['process']}}
    </form>
@endforeach

<script type="text/javascript">
$('.button').click(function(){
    var targetId =  $(this).data('id');

    $.ajax({
        url: "reviewcommand",
        type:"POST",
        data:{
            "_token": "{{ csrf_token() }}",
            "id": targetId
        },
        success:function(response){
            console.log(response);
        },
    });
});
</script>

@endsection


