@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Farm')

@section('content')

    @livewire('goto-farm', ['farm' => $farm])

@endsection
