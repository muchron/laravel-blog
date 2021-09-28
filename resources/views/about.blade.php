@extends('layouts.main')

@section('container')
    <article class="mt-4">
        <h1>This About page</h1>
        <h2>{{ $name }}</h2>
        <h5>{{ $email }}</h5>
        <img src="/public/{{ $profile }}"></img>
    </article>
@endsection

