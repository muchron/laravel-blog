{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <article class="mt-2">
        @foreach ($posts as $posts )
            <h3><a href="/post/{{ $posts->slug }}">{{ $posts->title }}</a></h3>
            <h5>by {{ $posts->author }} on <a href="/categories/{{ $posts->categories->slug }}">{{ $posts->categories->name }}</a></h5>
            <p>{!! $posts->body !!}</p>
            <a href="/blog">Kembali Ke Blog</a>
        @endforeach
    </article>
@endsection