@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="animal-card">
    @foreach ($animals as $animal)
        <x-animal :animal="$animal" />
    @endforeach
</div>
@endsection
