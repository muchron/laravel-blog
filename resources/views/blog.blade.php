{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mt-4 border-bottom pb-4">
            <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p class="">Author : <a href=" /user/{{ $post->user_id }} ">{{ $post->user->name }}</a> in <a href="
                /categories/{{ $post->category->slug }}">
                {{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}...</p>
            <a href="/post/{{ $post->slug }}">Read More...</a>
        </article>
    @endforeach
@endsection
