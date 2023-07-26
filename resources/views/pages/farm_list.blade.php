@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Farms List')

@section('content')

    @livewire('farms-list')

@endsection
