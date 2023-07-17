@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Device Add')

@section('content')



    @livewire('devices-add-livewire')

@endsection
