@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('title', 'Accounts')

@section('content')

    @livewire('accounts-list')

@endsection
