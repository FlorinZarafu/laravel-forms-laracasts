@extends('layout')
@section('content')
<h3>Edit article</h3>
<form method="POST" action="/articles/{{ $article->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name='title' id="title" value="{{ $article->title }}">
    </div>
    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <input type="text" name="excerpt" id="excerpt" value="{{ $article->excerpt }}">
    </div>
    <div class="form-group">
        <label for="body">Content</label>
        <textarea name="body" id="body" cols="30" rows="10">{{ $article->body }}</textarea>
    </div>
    <button type="submit">Create article</button>
</form>
@endsection
