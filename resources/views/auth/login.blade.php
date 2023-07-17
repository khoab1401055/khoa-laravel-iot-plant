@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/boxicons.css') }}" rel="stylesheet">
@endsection
@section('scripts')
    <script src="{{ mix('js/scripts.js') }}" defer></script>
@endsection
@section('title', 'Login')


@section('content')

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a href="{{ route('home') }}" class="text-center">
                                <span class="app-brand-logo demo">
                                    <img src="{{ asset('images/logo.png') }}" alt="Logo"
                                        class="img-thumbnail img-fluid d-block" style="max-width: 150px;">
                                </span>
                            </a>
                        </div>
                        <h4 class="mb-2">Welcome to <span class="text-body fw-bolder text-green-1">Plant IoT</span> </h4>
                        <p class="mb-4">Please sign-in to your account</p>

                        </span>
                        <form method="POST" action="{{ route('login') }}" id="submit-ajax">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Username</label>
                                <input id="username" type="text"
                                    class="form-control" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus
                                    placeholder="Enter your username" autofocus required>

                            </div>

                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="{{ route('password.request') }}">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input value="{{ old('password') }}"  type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }} >
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="{{ route('register') }}">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
