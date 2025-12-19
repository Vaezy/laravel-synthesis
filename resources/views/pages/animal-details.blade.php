@extends('layouts.app')

@section('title', $animal->name)

@section('content')
<div class="animal-detail-container">
    <h1 class="animal-detail-title">{{ $animal->name }}</h1>
    <div class="animal-detail-content">
        <div class="animal-detail-img">
            <img src="{{ asset('images/' . $animal->photo) }}" alt="{{ $animal->name }}">
        </div>
        <div class="animal-detail-info">
            <p>Espèce : {{ $animal->species }}</p>
            <p>Âge : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
</div>
@endsection
