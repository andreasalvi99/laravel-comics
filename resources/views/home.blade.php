@extends('layouts.master')

@section('jumbotron')
@endsection

@php
$comics = config('comics');
@endphp

@section('main-content')

<div class="row row-cols-6 gy-4 p-4">
    @foreach($comics as $comic)
    <div class="col bg-dark">
        <x-card>
            <div class="card h-100 bg-dark text-white">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">{{ $comic['series']}}</p>
                </div>
            </div>
        </x-card>
    </div> 
    @endforeach
</div>

@endsection

    