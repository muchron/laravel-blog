@extends('layouts.main')

@section('container')
    <ul>
        @foreach ($categories as $category)
            <article>
                <li>
                    <h3><a href="/post/{{ $category->slug }}">{{ $category->name }}</a></h3>
                    <p><a href="/categories/{{ $category->slug }}">Posts : {{ $category->post->count() }}</a></p>
                </li>
            </article>
        @endforeach
    </ul>
    <a href="/blog" class="btn btn-dark">All Posts</a>
@endsection
