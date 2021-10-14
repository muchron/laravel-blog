@extends('dashboard.layouts.main')

@section('container')
<div class="container col-lg-8">
<div class="row">
    <div class="col-lg-8">
        <article class="mt-2">
            <h3><a href="/post/{{ $post->slug }}" class="text-dark" style="text-decoration: none">{{ $post->title }}</a></h3>
            
            <img src="https://source.unsplash.com/1400x600/?{{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid mb-3">
            <a href="/dashboard/post" class="btn btn-primary" style="text-decoration: none"><span data-feather="arrow-left"></span> All My Post</a>
            <a href="/dashboard/post" class="btn btn-warning" style="text-decoration: none"><span data-feather="edit-2"></span> Edit</a>
            <a href="/dashboard/post" class="btn btn-danger" style="text-decoration: none"><span data-feather="trash-2"></span> Delete</a>
                <p>{!! $post->body !!}</p>
            </article>
    </div>
</div>
</div>
@endsection