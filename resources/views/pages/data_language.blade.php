@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Language Setting')

@section('content')

    @livewire('language')

@endsection
