@extends('layouts.app')

@section('content')
<!-- <div class="container mt-3" style="max-width: 720px;">
  <div class="text-right">
  <a href="{{ url('/product/create') }}"> 戻る</a>
  </div>

  <form>
    <div class="form-group">
      <label for="categoryAdd" class="font-weight-bold">新規カテゴリー追加</label>
      <input type="text" class="form-control" id="categoryAdd" name="name" />
    </div>
    <button type="submit" class="btn btn-primary">追加</button>
  </form>

  <div class="my-4">
    <a href="{{ url('/category/') }}"> 一覧・編集ページへ</a>
  </div>
</div> -->

<!-- 
  AllCommandControllerのcreateを実行するには、url('allcommand/create') とする。
 -->
<a type="button" href="{{ url('allcommand') }}" class="btn btn-primary text-right" role="button"><i class="fas fa-plus"></i> Linux Command List</a>
<a type="button" href="{{ url('reviewcommand') }}" class="btn btn-primary text-right" role="button"><i class="fas fa-plus"></i> Review List</a>



@endsection