@extends('layouts.template')

@section('judul')
    Login
@endsection

@section('extracss')
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
@endsection

@section('main')
    <section class="inner-page mt-4 vh-80">
        <div class="container py-5 h-100">
            @include('errors.message')
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{ 'login' }}" method="POST" class="form-group">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                required />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                required />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember"
                                    name="remember" checked />
                                <label class="form-check-label" for="remember"> Remember me </label>
                            </div>
                            <a href="{{ 'register' }}">Forgot password?</a>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
