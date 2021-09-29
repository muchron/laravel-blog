@extends('layouts.main')

@section('container')
    <article class="mt-4">
        <h1>This About page</h1>
        <h2>{{ $name }}</h2>
        <h5>{{ $email }}</h5>
        <div class="row">
            <div class="col-2">
                <img src="/img/{{ $profile }}" alt="{{ $profile }}" class="img-thumbnail" width="200"></img>
            </div>
            <div class="col-10">
                <p>Aliqua reprehenderit nostrud irure nulla duis. Aute minim ullamco dolor consectetur sunt. Excepteur ullamco consequat minim dolor eu pariatur magna ipsum. Adipisicing Lorem proident mollit voluptate consectetur consectetur qui labore officia ad. Veniam in consectetur in Lorem sint quis nisi ut commodo exercitation consequat in in. Ex voluptate est exercitation consectetur laborum.Commodo exercitation veniam magna amet et consectetur laborum cupidatat labore. Aute laboris sunt sunt quis elit. Commodo cillum ad velit fugiat nulla aliqua eiusmod non veniam nisi enim do laboris culpa. Nulla id eiusmod ad commodo adipisicing eiusmod mollit. Cupidatat reprehenderit exercitation ad fugiat amet duis elit officia laborum dolor ad occaecat. Pariatur veniam enim Lorem id magna proident voluptate.</p>
            </div>
        </div>
    </article>
@endsection

