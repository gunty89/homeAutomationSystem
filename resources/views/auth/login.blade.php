<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Radius - Signin/Signup</title>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="/login" method="POST">
                @csrf
                <h1>Sign in</h1>

                <input id="text" type="text" placeholder="Username"
                    class="form-control form-control-lg @error('username') is-invalid @enderror" name="username"
                    value="{{ old('username') }}" required autocomplete="username" aria-label="Username" autofocus>
                @if (session('error'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @error('username')
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
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="overlay-panel overlay-right bg-body-secondary">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/myJavascript.js') }}"></script>
</body>

</html>
