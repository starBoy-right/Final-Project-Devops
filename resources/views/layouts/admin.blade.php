<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f3f4f6;
            color: #1f2937;
        }

        /* ===== Layout ===== */
        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* ===== Sidebar ===== */
        .sidebar {
            width: 240px;
            background: #111827;
            color: #fff;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            margin-bottom: 40px;
            font-size: 24px;
            letter-spacing: 1px;
            color: #22c55e;
        }

        .sidebar ul {
            list-style: none;
            flex: 1;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            display: block;
            padding: 12px 18px;
            border-radius: 8px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
        }

        .sidebar ul li.active a,
        .sidebar ul li a:hover {
            background: #1f2937;
            color: #22c55e;
        }

        /* ===== Main ===== */
        .main {
            flex: 1;
            padding: 30px;
        }

        /* ===== Header ===== */
        .top-header {
            background: #fff;
            padding: 20px 30px;
            border-radius: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .top-header h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .top-header p {
            font-size: 14px;
            color: #6b7280;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 16px;
        }

        .logout-btn {
            background: #ef4444;
            border: none;
            color: #fff;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.2s;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        /* ===== Services Grid / Cards ===== */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .service-card {
            border-radius: 14px;
            padding: 25px;
            color: #fff;
            min-height: 160px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s;
        }

        .service-card:hover {
            transform: translateY(-4px);
        }

        .card-one {
            background: linear-gradient(135deg, #16a34a, #22c55e);
        }

        .card-two {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
        }

        .card-three {
            background: linear-gradient(135deg, #9333ea, #a855f7);
        }

        .card-four {
            background: linear-gradient(135deg, #f97316, #fb923c);
        }

        /* ===== Responsive ===== */
        @media (max-width: 768px) {
            .wrapper {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                justify-content: space-around;
                padding: 15px;
            }

            .sidebar ul {
                display: flex;
                gap: 10px;
            }

            .main {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin</h2>
            <ul>
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li class="{{ request()->is('admin/orders') ? 'active' : '' }}">
                    <a href="{{ url('/admin/orders') }}">Pemesanan</a>
                </li>
            </ul>
        </div>

        <!-- Main -->
        <div class="main">

            <!-- Header -->
            <div class="top-header">
                <div>
                    <h1>@yield('page-title')</h1>
                    <p>Selamat datang, {{ auth()->user()->email }}</p>
                </div>

                <div class="profile">
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button class="logout-btn">Logout</button>
                    </form>
                    <div class="avatar">
                        {{ strtoupper(substr(auth()->user()->email, 0, 1)) }}
                    </div>
                </div>
            </div>

            {{-- CONTENT --}}
            @yield('content')

        </div>
    </div>

</body>

</html>
