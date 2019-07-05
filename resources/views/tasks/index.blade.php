@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}のタスク一覧</h1>
    
    @if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->render('pagination::bootstrap-4') }}
    @endif
    
    {!! link_to_route('tasks.create', 'タスクの登録', null, ['class' => 'btn btn-primary']) !!}
@endsection