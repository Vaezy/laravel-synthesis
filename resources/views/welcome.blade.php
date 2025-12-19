@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h1>Nos animaux</h1>
<div class="animal-card">
    @foreach ($animals as $animal)
        <x-animal :animal="$animal" />
    @endforeach
</div>
@endsection
