@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <x-animal :animal="$animal" />
@endsection
