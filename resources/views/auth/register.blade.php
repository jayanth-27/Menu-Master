@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" >
</div><!-- End Breadcrumbs -->
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
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
                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone_number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="Your Phone Number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="text-success">Phone Number Should Be atleast 10 digits</div>
                            </div>
                        </div>
                        <div class="row mb-3">
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
                        <div class="row mb-3">
                            <label for="access" class="col-md-4 col-form-label text-md-end">{{ __('Access') }}</label>

                            <div class="col-md-6">
                                <input id="access" type="text" class="form-control @error('access') is-invalid @enderror" name="access" value="{{ old('access') }}" required autocomplete="access" autofocus placeholder="beachside or riverside or courtside">

                                @error('access')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div id="password-strength">
                                    <ul class="text-success">Password should have: 
                                        <li>Minimum of 8 characters. </li>
                                        <li>Atleast one Uppercase letter</li>
                                        <li>Atleast one Lowercase letter</li>
                                        <li>Atleast one special Character</li>
                                        <li>Atleast one Number</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInput = document.getElementById("password");
        const passwordStrength = document.getElementById("password-strength");
    
        passwordInput.addEventListener("input", function() {
            const password = passwordInput.value;
            const strength = checkPasswordStrength(password);
            updatePasswordStrengthIndicator(strength);
        });
    
        function checkPasswordStrength(password) {
            // Define your password strength rules here
            const lowercaseRegex = /[a-z]/;
            const uppercaseRegex = /[A-Z]/;
            const numberRegex = /[0-9]/;
            const specialCharacterRegex = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/;
    
            const hasLowercase = lowercaseRegex.test(password);
            const hasUppercase = uppercaseRegex.test(password);
            const hasNumber = numberRegex.test(password);
            const hasSpecialCharacter = specialCharacterRegex.test(password);
    
            const criteriaMet = hasLowercase && hasUppercase && hasNumber && hasSpecialCharacter;
    
            if (criteriaMet) {
                return "Strong";
            } else if (password.length >= 8) {
                return "Moderate";
            } else {
                return "Weak";
            }
        }
    
        function updatePasswordStrengthIndicator(strength) {
            passwordStrength.textContent = `Password Strength: ${strength}`;
        }
    });
    </script>
    
@endsection
