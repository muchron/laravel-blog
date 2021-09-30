{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <article class="mt-2">
        @foreach ($posts as $posts)
            <h3><a href="/post/{{ $posts->slug }}">{{ $posts->title }}</a></h3>
            <p>Author : <a href="/user/{{ $posts->user_id }}">{{ $posts->user->name }}</a> in <a
                    href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
            <p>{!! $posts->body !!}</p>
        @endforeach
    </article>
@endsection
