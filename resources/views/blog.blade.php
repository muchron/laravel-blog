@extends('layouts.main')

@section('container')
    <article class="mt-2">
        @foreach ($posts as $post)
            <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <h5>{{ $post->author }}</h5>
            <p>{{ $post->excerpt}}...</p>
        @endforeach
    </article>
@endsection