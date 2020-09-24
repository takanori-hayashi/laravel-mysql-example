@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Todo登録</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('todos.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label
                              for="inputTitle"
                              class="col-sm-2 col-form-label"
                            >タイトル</label>
                            <div class="col-sm-10">
                                <input
                                  type="text"
                                  class="form-control @error('title') is-invalid @enderror"
                                  id="inputTitle"
                                  name="title"
                                >
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                ></textarea>
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
