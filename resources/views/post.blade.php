@extends('layouts.main')

@section('container')
    <h3>{{ $posts->title }}</h3>
    <h5>Author : {{ $posts->author }}</h5>
    {!! $posts->body !!}
    <a href="/blog" class="btn btn-danger">Kembali ke blog</a>
@endsection