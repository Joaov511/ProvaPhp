@section('content')
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body {
        background: linear-gradient(to top, #a53f3f, #333333, #000000, #333333, #a53f3f);
        color: #e0e0e0;
        font-family: "Kanit", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100%;
    }
    .card {
        background-color: #1e1e1e;
        border: 2px solid #e74c3c;
        margin: 20px;
        padding: 40px; 
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }
    .card-header {
        background-color: #2c2c2c;
        color: #e74c3c;
        text-align: center;
        font-size: 1.5em;
        text-transform: uppercase;
    }
    .form-control {
        background-color: #2c2c2c;
        color: #e0e0e0;
        border: 1px solid #e74c3c;
    }
    .form-control:focus {
        border-color: #e74c3c;
        box-shadow: 0 0 5px rgba(231, 76, 60, 0.5);
    }
    .btn-primary {
        background-color: #e74c3c;
        border-color: #e74c3c;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #c0392b;
        border-color: #c0392b;
    }
    .form-check-label {
        color: #e0e0e0;
    }
    .invalid-feedback {
        color: #e74c3c;
    }
    .btn-link {
        color: #e74c3c;
    }
    .btn-link:hover {
        color: #c0392b;
    }
    .title {
        color: #e74c3c;
        font-size: 4rem;
        margin-bottom: 100px;
        text-align: center;
        text-transform: uppercase;
        font-weight: 600;
        text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
    }
    .form-group {
        margin: 20px;
    }
    #password{
        padding:10px 110px 10px 10px;
    }
    #email{
        padding:10px 110px 10px 10px;
    }
    #password-confirm{
        padding:10px 110px 10px 10px;
    }
    #name{
        padding:10px 110px 10px 10px;
    }
    button{
        padding:10px;
        width:100%;
        font-size:1.3rem;
        font-weight:300;
    }
</style>
</head>
<div class="container" id="container">
    <div class="title">Santuário Incongruente</div>
    <div class="row justify-content-center">
        <div class="col-md-8" id="col-md-8">
            <div class="card" id="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row mb-3" id="form-group-name">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="form-group-email">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="form-group-password">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="form-group-password-confirm">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0" id="form-group-button">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
