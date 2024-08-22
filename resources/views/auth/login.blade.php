@extends('auth.layouts')

@section('title', 'Login')
@section('content')

<section class="vh-100" >
    <div class="container py-5 h-50">
        <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card-body p-5 text-center">
                    <h3 class="mb-5">Welcome Back! User!</h3>
                </div>
                
                <div class="form-outline mb-4">
                    <div class="card-body p-0 text-center">
                        <form action="{{ route('authenticate') }}" method="post">
                            @csrf
                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control border rounded border-light @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-start border rounded border-light">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                </div>
                            </div>

                            <!-- Checkbox -->
                            <div class="d-flex align-items-center justify-content-center p-2 m-3 ">
                                <input class="form-check-input border border-primary p-2 m-2" type="checkbox" name="remember_me" value="true" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember Me </label>
                            </div>
        

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                            </div>

                            
                        </form>
                    
                        <hr class="my-4">
                    
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-dark p-1 m-1" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-dark mb-2 p-1 m-1" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
        
                    </div>
                </div>
            </div>
        </div>    
    </div>
</section>
    
@endsection