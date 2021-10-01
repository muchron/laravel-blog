@extends('layouts.main')

@section('container')
    @foreach ($posts as $posts)
        <article class="mt-2">
            <h3><a href="/post/{{ $posts->slug }}">{{ $posts->title }}</a></h3>
            <p>Author : <a href="/authors/{{ $posts->user_id }}">{{ $posts->user->name }}</a> on <a
                    href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a></p>
            <p>{!! $posts->body !!}</p>
        </article>
    @endforeach
@endsection
