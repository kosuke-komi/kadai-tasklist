@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>状態</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                   {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('tasks.create', 'タスクの追加', [], ['class' => 'btn btn-primary']) !!}


@endsection