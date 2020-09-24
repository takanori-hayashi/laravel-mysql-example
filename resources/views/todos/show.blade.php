@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Todo詳細</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th class="w-25">タイトル</th>
                            <td>{{ $todo->title }}</td>
                        </tr>
                        <tr>
                            <th>概要</th>
                            <td>{{ $todo->description }}</td>
                        </tr>
                        <tr>
                            <th>状態</th>
                            <td>{{ $todo->completed }}</td>
                        </tr>
                        <tr>
                            <th>作成日</th>
                            <td>{{ $todo->created_at->format('Y年m月d日') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
