@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Devices List')

@section('content')



    @livewire('devices-list-livewire')

@endsection
