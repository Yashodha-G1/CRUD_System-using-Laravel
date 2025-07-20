<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee CRUD - Aegiiz</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }

        .bg-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
            position: relative;
            z-index: 10;
            background-color: rgba(34, 34, 34, 0.4);
        }

        .logo img {
            height: 50px;
        }

        .title {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            flex-grow: 1;
            color: white;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            object-fit: cover;
        }

        .content {
            position: relative;
            padding: 40px;
            margin: 80px auto 50px auto;
            width: 80%;
            max-width: 800px;
            background: rgba(34, 34, 34, 0.08);
            border-radius: 20px;
            backdrop-filter: blur(12px);
            color: white;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            animation: fadeIn 1s ease;
        }

        a, button {
            background: rgba(255,255,255,0.2);
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            margin: 5px;
            transition: background 0.3s ease;
        }

        a:hover, button:hover {
            background: rgba(255,255,255,0.4);
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

    {{-- Background Video --}}
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('videos/Background.mp4') }}" type="video/mp4">
    </video>

    {{-- Header with Logo, Title, and User Info --}}
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/aegiizLogo.png') }}" alt="Aegiiz Logo">
        </div>
        <div class="title">
   EMPLOYEE CRUD SYSTEM<br>
    <span style="font-size: 14px; font-weight: normal; letter-spacing: 1px; color: #ccc;">Aegiiz Technologies Task</span>
</div>

        <div class="user-info">
            <span>Welcome</span>
            <img src="{{ asset('images/user.png') }}" alt="User Icon">
        </div>
    </div>

    {{-- Main Content --}}
    <div class="content">
        @yield('content')
    </div>

</body>
</html>
