@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
    @foreach ($animals as $animal)
        <x-animal :animal="$animal" />
    @endforeach
</div>
@endsection
