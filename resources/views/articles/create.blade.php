@extends('layout')
@section('content')
<h3>Create new article</h3>
<form method="POST" action="/articles">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name='title' id="title" class="{{ $errors->has('title') ? 'is-danger' : '' }}"
            value="{{ old('title') }}">
        @if ($errors->has('title'))
        <p>{{ $errors->first('title') }}</p>
        @endif

    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <input type="text" name="excerpt" id="excerpt" class="@error('excerpt') is-danger @enderror">
        @error('excerpt')
        <p>{{ $errors->first('excerpt') }}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">Content</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Create article</button>
</form>
@endsection
