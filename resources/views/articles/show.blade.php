@extends('layout')
@section('content')
<h3>{{ $article->title }}</h3>
<span>{{ $article->excerpt }}</span>
<p>{{ $article->body }}</p>
@endsection
