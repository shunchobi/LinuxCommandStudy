@extends('layouts.app')

@section('content')

<button type="button" href="{{ url('quiz') }}"> Random Quiz</button>

@foreach ($reviewCommands as $review_key => $review_value)
    @foreach($allCommands as $all_key => $all_value)
        @if ($reviewCommands[$review_key]['id_review'] === $allCommands[$all_key]['id'])
            <form method="post">
            @csrf
                <div id="command-{{$reviewCommands[$review_key]['id_review']}}">
                    <button class="button" type="button" data-id="{{$reviewCommands[$review_key]['id_review']}}"> 削除</button>
                    {{ $allCommands[$all_key]['command'].$allCommands[$all_key]['howtouse'].$allCommands[$all_key]['process'] }}
                </div>
            </form>
            @break
        @endif
    @endforeach
@endforeach

@endsection


<script>
    // window.addEventListener('DOMContentLoaded', function () {});は、
    // jQuery構文を実行するのをページのDOMが表示された後にすることによってエラーを回避する処理
    //resources/views/layouts/app.blade.php 内の上の方に書かれている,src="{{ asset('js/app.js') }}" defer>
    //のdeferを消してもえらーを回避できるが、app.jsの容量が大きくなった時に何かしら不都合が起きる可能性がある

window.addEventListener('DOMContentLoaded', function () {
    $('.button').click(function(){
        var targetId = $(this).data('id');

        $.ajax({
            url: "reviewcommand/"+targetId,
            type:"delete",
            data:{
                "_token": "{{ csrf_token() }}",
            },
            success: function(response){
                console.log(response);
                $("#command-"+targetId).fadeOut();
            },
            error: function (response) {
                console.log('Error:', response);             
            }
        });
    });
});

</script>