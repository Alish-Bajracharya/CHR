<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            /* height: 100%; */
            margin-top: 50px;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #141E30, #243B55);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            max-width: 550px; /* Increased width */
            width: 100%;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }



        .btn-custom {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
        }

        .forgot-password {
            color: #ff4b2b;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .logo {
            width: 350px; /* Reduced size */
            height: 200px;
            object-fit:cover;
            background:transparent;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: none;
            color: white;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="photo-collage"></div>
        <img src="{{asset('assets/images/assets/removebg-preview.png')}}" alt="Resort Logo" class="logo">
        <h4 class="mb-3">Welcome to ChampaDevi</h4>
        <p class="text-light">Log in to explore your exclusive resort experience</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-3">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            @if ($errors->any())
                <div class="text-danger text-start">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="btn btn-custom">Log In</button>
        </form>
        {{-- <div class="mt-3">
            <a href="#" class="forgot-password">Forgot Password?</a>
        </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
