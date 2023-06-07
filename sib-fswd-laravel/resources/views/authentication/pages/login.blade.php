@extends('authentication.layouts')

@section('card')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center bg-warning">
                            <span class="fa fa-user-o"></span>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <h3 class="text-center text-secondary mb-4">Have an account?</h3>
                        <form action="/login-user" class="login-form" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email"  class="form-control rounded-left" placeholder="Enail" required value="{{ old('email') }}">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-secondary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ '/register' }}">Belum punya akun?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success rounded submit p-3 px-5">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
