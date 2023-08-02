@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Monitoring')

@section('content')

    @livewire('monitoring')

@endsection
