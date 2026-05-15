@extends('layouts.master')

@section('jumbotron')
@endsection

@php
$comics = config('comics');
@endphp

@section('main-content')

<div class="row row-cols-6">
    @foreach($comics as $comic)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">{{ $comic['series']}}</p>
            </div>
        </div>
    </div>

    @endforeach
</div>

@endsection

    