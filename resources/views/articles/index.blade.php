@extends('layout')
@section('content')
<ul>
    @foreach ($articles as $article)
    <li style="border: 1px solid #222; margin:20px auto;">
        <a href="{{ route('article.show', $article) }}">
            <h3>{{ $article->title }}</h3>
        </a>
        <span>{{ $article->excerpt }}</span>
        <p>{{ $article->body }}</p>
    </li>
    @endforeach
</ul>
@endsection
