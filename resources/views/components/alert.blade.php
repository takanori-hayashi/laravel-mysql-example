@if (session()->has('status'))
    <div class="alert alert-success my-3">
        {{ session('status') }}
    </div>
@endif