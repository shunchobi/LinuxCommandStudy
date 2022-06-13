@extends('layouts.app')

@section('content')

<!-- 
    command_info
    all_or_review
-->


<form>
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