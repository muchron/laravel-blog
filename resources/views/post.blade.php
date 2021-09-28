@extends('layouts.main')

@section('container')
    <h3>{{ $post['title'] }}</h3>
    <h5>Author : {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="/blog" class="btn btn-danger">Kembali ke blog</a>
@endsection