@extends('layouts.app')

@section('content')
<center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Password
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('user.password.update') }}">
                            @method('patch')
                            @csrf
                            
                            <h2 style="color: white;font-style: bold;">Change Password</h2>
                            </center>
                            <br><br>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right" style="color: white;font-size: 25px">{{ __('Password Baru') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: white;font-size: 25px">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-size: 20px">
                                        Update Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection