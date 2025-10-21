<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSMA | Login</title>
    <style>
        *{box-sizing:border-box;margin:0;padding:0;font-family:'Poppins',sans-serif;scroll-behavior:smooth}body{background:#f3f4f6;color:#111827;display:flex;justify-content:center;align-items:center;height:100vh} .login-container{background:#fff;padding:50px 40px;border-radius:20px;box-shadow:0 10px 30px rgba(0,0,0,0.1);width:100%;max-width:400px;position:relative;overflow:hidden} .login-container h2{text-align:center;margin-bottom:30px;color:#4f46e5;animation:fadeInDown 1s ease forwards;opacity:0} form{display:flex;flex-direction:column;gap:20px} input{padding:12px 15px;border:2px solid #d1d5db;border-radius:10px;font-size:1rem;transition:all 0.3s ease} input:focus{border-color:#4f46e5;box-shadow:0 0 8px rgba(79,70,229,0.5);outline:none} .error{color:#f43f5e;font-size:0.9rem;margin-top:-15px;margin-bottom:10px} button{padding:12px 15px;background:#4f46e5;color:#fff;font-weight:600;border:none;border-radius:10px;font-size:1rem;cursor:pointer;transition:all 0.3s ease;box-shadow:0 4px 15px rgba(0,0,0,0.15)} button:hover{transform:translateY(-3px) scale(1.05);box-shadow:0 8px 25px rgba(79,70,229,0.6);text-shadow:0 0 6px #fff}@keyframes fadeInDown{0%{transform:translateY(-30px);opacity:0}100%{transform:translateY(0);opacity:1}}
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login to HSMA</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        @error('email')<div class="error">{{ $message }}</div>@enderror

        <input type="password" name="password" placeholder="Password" required>
        @error('password')<div class="error">{{ $message }}</div>@enderror

        <button type="submit">Login</button>
    </form>
    <p style="text-align:center;margin-top:15px;color:#6b7280;font-size:0.9rem;">Don't have an account? <a href="{{ route('ShowRegister') }}" style="color:#4f46e5;font-weight:500;">Register</a></p>
</div>

</body>
</html>
