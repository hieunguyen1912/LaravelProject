@extends('front.layout.master')

@section('main_content')
<div class="page-content pt_70 pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="{{ route('reset_password_submit', [$token, $email]) }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Retype Password</label>
                            <input type="password" class="form-control" name="retype_password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Submit
                            </button>
                            <a href="{{ route('login') }}" class="primary-color">Back to Login Page</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection