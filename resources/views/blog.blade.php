{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')    

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/post">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @endif
                
                @if (request('author'))
                    <input type="hidden" name="author" value="{{request('author')}}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Post Here . . ." name="search" value="{{request('search')}}">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>        
        </div>        
    </div>
    
    @if ($posts->count())
        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1400x400/?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
            <div class="card-body">
                <h5 class="card-title"><a href="/post/{{$posts[0]->slug}}" class="fs-4 text-dark">{{$posts[0]->title}}</a></h5>
                <p>By 
                    <a href="/post?author={{$posts[0]->user->name}}">{{$posts[0]->user->name}} </a> on 
                    <a href="/post?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}} </a>
                </p>
                <p class="card-text">{{$posts[0]->excerpt}}</p>
                <p><a href="/post/{{$posts[0]->slug}}" class="btn btn-success">Read More</a></p>
                <p class="card-text"><small class="text-muted">Created at {{$posts[0]->created_at->diffForHumans()}}</small></p>
            </div>
        </div>

        <div class="container pb-4 ">
            <div class="row">
              @foreach ($posts->skip(1) as $post)
                  <div class="col-md-4">
                      <div class="card mb-3">
                          <p class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.5)">
                              <a href="/post?category={{$post->category->slug}}" class=" text-white">{{$post->category->name}}</a>
                          </p>
                          <img src="https://source.unsplash.com/500x400/?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                          <div class="card-body">
                              <h5 class="card-title"><a href="/post/{{ $post->slug }}" class="text-dark">{{ $post->title }}</a></h5>
                              <small class="card-text text-muted">by <a href="/post?author={{$post->user->name}}">{{$post->user->name}}</a>
                              {{$post->created_at->diffForHumans()}}</small>
                              <p class="card-text">{{ $post->excerpt }} </p>
                              <a href="/post/{{ $post->slug }}" class="btn btn-success">Read More</a>
                          </div>
                        </div>
                  </div>
              @endforeach
            </div>
        </div>
    @else
        <h2 class="text-center">No Post yet</h2>
    @endif

    <div class="d-flex justify-content-end">
        {{$posts->links()}}
    </div>
@endsection
