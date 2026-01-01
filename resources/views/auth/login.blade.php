<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #111827, #1f2937);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 900px;
            background: #fff;
            border-radius: 16px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }

        /* LEFT PANEL */
        .login-info {
            background: linear-gradient(135deg, #0f172a, #020617);
            color: #fff;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-info h1 {
            font-size: 36px;
            color: #9aff4f;
            margin-bottom: 12px;
        }

        .login-info p {
            font-size: 16px;
            color: #cbd5f5;
            line-height: 1.6;
        }

        /* RIGHT PANEL */
        .login-form {
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-form h2 {
            font-size: 26px;
            margin-bottom: 25px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            font-size: 14px;
            color: #374151;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 15px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #22c55e;
        }

        /* ===== Remember Me ===== */
        .remember-wrapper {
            margin-bottom: 15px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            user-select: none;
        }

        .remember input {
            width: 18px;
            height: 18px;
            accent-color: #22c55e;
            cursor: pointer;
        }

        .remember span {
            font-size: 14px;
            color: #374151;
        }

        button {
            margin-top: 10px;
            width: 100%;
            padding: 14px;
            background: #22c55e;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #16a34a;
        }

        .error {
            margin-top: 12px;
            color: #dc2626;
            font-size: 14px;
            text-align: center;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
        }

        /* ===== TABLET ===== */
        @media (max-width: 900px) {
            .login-wrapper {
                grid-template-columns: 1fr;
            }

            .login-info {
                display: none;
            }
        }

        /* ===== MOBILE ===== */
        @media (max-width: 480px) {
            .login-form {
                padding: 35px 25px;
            }

            .login-form h2 {
                font-size: 22px;
            }

            .remember {
                gap: 12px;
            }

            .remember input {
                width: 20px;
                height: 20px;
            }

            .remember span {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <!-- LEFT -->
        <div class="login-info">
            <h1>Admin Panel</h1>
            <p>
                Silakan login untuk mengelola pemesanan website,
                dashboard admin, dan laporan sistem.
            </p>
        </div>

        <!-- RIGHT -->
        <div class="login-form">
            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <div class="remember-wrapper">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        <span>Ingat saya</span>
                    </label>
                </div>

                <button type="submit">Login</button>

                @if ($errors->any())
                    <div class="error">
                        {{ $errors->first() }}
                    </div>
                @endif
            </form>

            <div class="footer">
                © {{ date('Y') }} Admin Dashboard
            </div>
        </div>

    </div>

</body>

</html>
