<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal Login — Pearlcon</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/img/logo.jpeg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600;700&family=IBM+Plex+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background: linear-gradient(135deg, #0a1626 0%, #101f35 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 420px;
            padding: 40px 36px;
        }

        .login-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .login-brand img {
            width: 48px;
            height: 48px;
            border-radius: 10px;
        }

        .login-brand h2 {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: #0a1626;
            margin: 0;
        }

        .login-brand span {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #e98423;
            font-weight: 600;
        }

        .form-control {
            padding: 12px 16px;
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #e98423;
            box-shadow: 0 0 0 3px rgba(233, 132, 35, 0.15);
        }

        .btn-amber {
            background: #e98423;
            color: #ffffff;
            font-weight: 600;
            padding: 12px;
            border-radius: 10px;
            border: none;
            width: 100%;
            transition: all 0.2s ease;
        }

        .btn-amber:hover {
            background: #d67417;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-brand">
            <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Pearlcon Logo" onerror="this.src='https://via.placeholder.com/48/0a1626/ffffff?text=P';">
            <div>
                <h2>Pearlcon Portal</h2>
                <span>Secure Admin Login</span>
            </div>
        </div>

        @if($errors->has('login_error'))
            <div class="alert alert-danger py-2 fs-13 mb-3">
                {{ $errors->first('login_error') }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold fs-14">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="admin@pearlcon.com">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold fs-14">Password</label>
                <div class="position-relative">
                    <input type="password" class="form-control pe-5" id="password" name="password" required placeholder="••••••••">
                    <button type="button" id="togglePasswordBtn" class="btn btn-link position-absolute end-0 top-50 translate-middle-y text-muted pe-3 text-decoration-none" style="z-index: 10;" title="Show/Hide Password">
                        <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label fs-14 text-muted" for="remember">Remember me</label>
            </div>

            <button type="submit" class="btn btn-amber">Sign In to Dashboard</button>
        </form>
    </div>

    <script>
        document.getElementById('togglePasswordBtn')?.addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line>';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>';
            }
        });
    </script>


</body>
</html>
