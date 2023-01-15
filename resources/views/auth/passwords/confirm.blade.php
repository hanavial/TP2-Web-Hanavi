@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border border-light">
                <div class="card-header border border-light">{{ __('Confirm Password') }}</div>

                <div class="card-body pt-2">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <ul class="invalid-feedback mb-0 px-3" role="alert">
                                        @foreach ($errors->all() as $item)
                                            <li><strong>{{ $item }}</strong></li>
                                        @endforeach
                                    </ul>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex flex-column">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
