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
                        <h3 class="text-center text-secondary mb-4">Register</h3>

                        <form action="{{ '/register-user' }}" class="login-form" method="post">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $e)
                                        <li>
                                            <p class="text-dark" >{{ $e}}</p>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required value="{{ old('username') }}">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="role" class="form-control rounded-left" placeholder="Username" required value="user">
                            </div>
                            <div class="form-group d-flex">
                                <input type="email" name="email" class="form-control rounded-left" placeholder="E-mail" required value="{{ old('email') }}">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required >
                            </div>
                            <div class="form-group d-md-flex">
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
