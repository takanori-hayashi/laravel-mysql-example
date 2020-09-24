@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Todo一覧</div>

                <div class="card-body">
                    <div>
                        <a
                          href="{{ route('todos.create') }}"
                          class="btn btn-primary"
                        >新規登録</a>
                    </div>
                    @include('components.alert')
                    <table class="table table-straiped mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>アクション</th>
                            </tr>
                        </thead>
                      <tbody>
                          @foreach ($todos as $todo)
                              <tr>
                                  <td class="align-middle">{{ $todo->id }}</td>
                                  <td class="align-middle">{{ $todo->title }}</td>
                                  <td class="align-middle">
                                      <div class="d-flex">
                                          <a
                                            href="{{ route('todos.show', $todo) }}"
                                            class="btn btn-secondary btn-sm"
                                          >表示</a>
                                          <a
                                            href="{{ route('todos.edit', $todo) }}"
                                            class="btn btn-secondary btn-sm ml-1"
                                          >編集</a>
                                          <form
                                            method="POST"
                                            class="ml-1"
                                            action="{{ route('todos.destroy', $todo) }}"
                                          >
                                              @method('DELETE')
                                              @csrf
                                              <button
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('本当に削除しますか？');"
                                              >削除</button>
                                          </form>
                                      </div>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>
                    <div>
                        {{ $todos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
