@extends('admin.auth.master')

@section('title', __('keywordes.login'))

@section('content')
    <div class="row align-items-center h-100">
        <form class="mx-auto text-center col-lg-3 col-md-4 col-10" method="POST" action="{{ route('admin.login') }}">
            @csrf
            @include('admin.partials.language')
            <a class="mx-auto mt-2 text-center navbar-brand flex-fill" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
            <h1 class="mb-3 h6">{{ __('keywordes.sing_in') }}</h1>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="form-group">
                <label for="inputEmail" class="sr-only">{{ __('keywordes.email') }}</label>
                <input type="email" id="inputEmail" class="form-control form-control-lg"
                    placeholder="{{ __('keywordes.email') }}" name="email" :value="old('email')">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-group">
                <label for="inputPassword" class="sr-only">{{ __('keywordes.password') }}</label>
                <input type="password" id="inputPassword" class="form-control form-control-lg"
                    placeholder="{{ __('keywordes.password') }}" name="password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-3 checkbox">
                <label>
                    <input type="checkbox" value="remember-me" name="remember"> {{ __('keywordes.remember_me') }} </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit"> {{ __('keywordes.login') }} </button>
        </form>
    </div>

@endsection
