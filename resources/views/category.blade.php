@extends('layouts.main')

@section('container')
    <h1>Categories Page {{ $category }}</h1>
    @foreach ($posts as $post)
        <article class="mt-4 border-bottom pb-4">
            <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p><a href="/user/{{ $post->user_id }}">{{ $post->user->name }}</a> on <a
                    href="/categories/{{ $slug }}">{{ $category }}</a></p>
            <p>{{ $post->excerpt }}...</p>
            <a href="/post/{{ $post->slug }}">Read More</a>
        </article>
    @endforeach
    <a href="/categories">More Categories</a>
@endsection
