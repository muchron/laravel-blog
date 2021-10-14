@extends('layouts.main')

@section('container')

    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-3">
            <a href="/post?category={{$category->slug}}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/800x600/?{{$category->name}}" class="card-img" alt="{{$category->name}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill py-3" style="background-color: rgba(0, 0, 0, 0.5)">{{$category->name}}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection
