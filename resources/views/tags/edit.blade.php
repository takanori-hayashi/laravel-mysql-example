@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">タグ編集</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tags.update', $tag) }}">
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
                                  value="{{ $tag->title ?? '' }}"
                                >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button
                                  type="submit"
                                  class="btn btn-primary"
                                >登録</button>
                                <a
                                  href="{{ route('tags.index') }}"
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