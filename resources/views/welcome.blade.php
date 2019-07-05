@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>タスクリストへようこそ！</h1>
        </div>
    </div>
    <div class="text-center">
        {!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
@endsection
