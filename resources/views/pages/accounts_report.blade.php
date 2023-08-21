@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Report Accout')

@section('content')

    @livewire('accounts-report')

@endsection
