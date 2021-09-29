@extends('layouts.main')

@section('container')
    <h1>Categories Page</h1>
    <article class="mt-2">
        @foreach ($posts as $post)
            <h3><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h3>
            <h5>{{ $post->author }}</h5>
            <p>{{ $post->excerpt}}...</p>
        @endforeach
    </article>
@endsection