@extends('layouts.main')

@section('container')
    <article class="mt-2">
        @foreach ($post as $post)
            <h3><a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a></h3>
            <h5>{{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        @endforeach
    </article>
@endsection