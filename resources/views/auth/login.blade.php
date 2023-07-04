<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Automation System</title>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
    <div class="container1">
        <style>
            .container1{
                background-image: url('/assets/img/Sitting.jpg');
            }

        </style>
    <div class="container" id="container" style="background-color: cadetblue">
        <div class="form-container sign-in-container" style="background-color: cadetblue">
            <form action="/login" method="POST">
                @csrf
                <h1>Sign in</h1>
                <input id="email" type="email" placeholder="email"
                    class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" aria-label="email" autofocus>
                @if (session('error'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password"
                    class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password"
                    aria-label="Password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <button style="background-color: cadetblue">Sign In</button>
            </form>
        </div>
        <div class="overlay-container" style="background-color: cadetblue">
            <div class="overlay">
                <form action="{{ route('signUp') }}" method="GET">
                    <div class="overlay-panel overlay-right" style="background-color: cadetblue">
                        <h1>Smart Home </h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('assets/js/myJavascript.js') }}"></script>
</body>

</html>
