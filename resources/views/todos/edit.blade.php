@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Todo編集</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('todos.update', $todo) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label
                              for="inputTitle"
                              class="col-sm-2 col-form-label"
                            >タイトル</label>
                            <div class="col-sm-10">
                                <input
                                  type="text"
                                  class="form-control"
                                  id="inputTitle"
                                  name="title"
                                  value="{{ $todo->title ?? '' }}"
                                >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                              for="inputDescription"
                              class="col-sm-2 col-form-label"
                            >説明文</label>
                            <div class="col-sm-10">
                                <textarea
                                  type="text"
                                  class="form-control"
                                  id="inputDescription"
                                  name="description"
                                  rows="5"
                                >{{ $todo->description ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                              for="inputCompleted"
                              class="col-sm-2 col-form-label"
                            >状態</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="completed"
                                      id="radiosCompleted1"
                                      value="0"
                                      {{ !$todo->completed ? 'checked' : '' }}
                                    >
                                    <label
                                      class="form-check-label"
                                      for="radiosCompleted1"
                                    >未完了</label>
                                </div>
                                <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="radio"
                                      name="completed"
                                      id="radiosCompleted2"
                                      value="1"
                                      {{ $todo->completed ? 'checked' : '' }}
                                    >
                                    <label
                                      class="form-check-label"
                                      for="radiosCompleted2"
                                    >完了</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label
                              for="inputTag"
                              class="col-sm-2 col-form-label"
                            >タグ</label>
                            <div class="col-sm-10">
                                @foreach ($tags as $key => $tag)
                                    <div class="form-check form-check-inline">
                                        <input
                                            type="checkbox"
                                            name="tags[]"
                                            value="{{ $key }}"
                                            id="tag{{ $key }}"
                                            @if (isset($todo->tags) && $todo->tags->contains($key))
                                                checked
                                            @endif
                                        >
                                        <label
                                            for="tag{{ $key }}"
                                            class="form-check-label"
                                        >{{ $tag }}</label>
                                    </div>
                                @endforeach

                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button
                                  type="submit"
                                  class="btn btn-primary"
                                >登録</button>
                                <a
                                  href="{{ route('todos.index') }}"
                                  class="btn btn-secondary"
                                >
                                  一覧に戻る
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection