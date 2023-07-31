@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Farms Add')

@section('content')

    @livewire('farm-add')

@endsection
