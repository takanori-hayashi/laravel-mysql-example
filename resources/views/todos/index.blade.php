@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Todo一覧</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                            </tr>
                        </thead>
                      <tbody>
                          @foreach ($todos as $todo)
                              <tr>
                                  <td>{{ $todo->ID }}</td>
                                  <td>{{ $todo->title }}</td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
