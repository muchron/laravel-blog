@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $posts)
            <article class="mt-2">
                <h3><a href="/post/{{ $posts->slug }}" class="text-dark">{{ $posts->title }}</a></h3>
                
                <div class="position-relative">
                    <p class="position-absolute bottom-0 start-0 text-white px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5)">Author : <a href="/post?author={{ $posts->user->name }}" class="text-white">{{ $posts->user->name }}</a> on <a
                        href="/post?category={{ $posts->category->slug }}" class="text-white">{{ $posts->category->name }}</a> <br>
                        <small class="text-white">Posted at {!! $posts->created_at->diffForHumans() !!}</small>
                    </p>
                    <img src="https://source.unsplash.com/1400x600/?{{$posts->category->name}}" alt="{{$posts->category->name}}" class="img-fluid">
                </div>
                    <p>{!! $posts->body !!}</p>
                </article>
            @endforeach
        </div>
    </div>
</div>

@endsection
