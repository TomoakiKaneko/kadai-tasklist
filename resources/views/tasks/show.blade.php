@extends('layouts.app')

@section('content')
    <h1>タスクの詳細</h1>

    @if ($task->user_id === Auth::id())
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
            <tr>
                <th>タスク</th>   
                <td>{{ $task->content }}</td>
            </tr>
            <tr>
                <th>ステータス</th>   
                <td>{{ $task->status }}</td>
            </tr>
        </table>
        
        {!! link_to_route('tasks.edit', '編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @else
        <h2>ログインユーザ以外のタスクは閲覧できません。</h2>
    @endif
@endsection