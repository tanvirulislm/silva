@extends('layouts.auth', ['title' => 'Email Verification'])

@section('content')

<div class="col-md-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card p-3 mb-0">
                <div class="card-body">

                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                        <div class="mb-4 p-0 text-center">
                            <a href="{{ route('second', [ 'dashboard' , 'index']) }}" class="auth-logo">
                                <img src="/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
                            </a>
                        </div>

                        <div class="auth-title-section mb-3 text-center mt-2">
                            <h3 class="text-dark fs-20 fw-medium mb-2">Welcome back</h3>
                            <p class="text-muted fs-15">Sign In To Continue To Silve.</p>
                        </div>
                        
                        <div class="pt-0">
                            <form action="#" class="my-4 mb-0">
                                <div class="form-group mb-3">
                                    <label for="emailaddress" class="form-label">Email</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>
                                
                                <div class="form-group mb-0 row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit"> Confirm </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="col-xl-7">
    <div class="account-page-bg p-md-5 p-4">
        <div class="text-center">
            <div class="auth-image">
                <img src="/images/auth-images.svg" class="mx-auto img-fluid"  alt="images">
            </div>
        </div>
    </div>
</div>

@endsection