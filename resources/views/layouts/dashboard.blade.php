<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | HSMA</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;scroll-behavior:smooth}body{background:#121212;color:#e0e0e0;display:flex;min-height:100vh;overflow-x:hidden}.sidebar{width:220px;background:#1a1a1a;padding:20px;position:fixed;top:0;left:0;bottom:0;display:flex;flex-direction:column;gap:15px;box-shadow:4px 0 10px rgba(0,0,0,0.3);z-index:10}.sidebar h2{color:#4f46e5;text-align:center;margin-bottom:25px;font-size:1.4rem}.sidebar a{color:#e0e0e0;text-decoration:none;padding:10px 15px;border-radius:8px;transition:all 0.3s ease;display:block}.sidebar a:hover,.sidebar a.active{background:#4f46e5;color:#fff;transform:translateX(4px)}.main-content{margin-left:220px;flex:1;padding:30px;transition:margin 0.3s ease}.header{background:#1f1f1f;padding:15px 25px;border-radius:12px;margin-bottom:25px;display:flex;justify-content:space-between;align-items:center;box-shadow:0 0 10px rgba(0,0,0,0.3)}.header h1{font-size:1.2rem;color:#fff}.header .user-info{display:flex;align-items:center;gap:10px}.header .user-info span{color:#a1a1a1;font-size:0.95rem}.header .user-info a{color:#f43f5e;text-decoration:none;font-weight:500;transition:0.2s}.header .user-info a:hover{text-shadow:0 0 6px #f43f5e}.btn{background:#4f46e5;color:#fff;border:none;border-radius:8px;padding:10px 15px;cursor:pointer;transition:all 0.3s ease;font-size:1rem;font-weight:500}.btn:hover{transform:translateY(-3px) scale(1.05);box-shadow:0 4px 10px rgba(79,70,229,0.5)}@media(max-width:768px){.sidebar{position:fixed;left:-220px;transition:left 0.3s ease}.sidebar.open{left:0}.main-content{margin-left:0}.toggle-btn{position:fixed;top:15px;left:15px;background:#4f46e5;color:#fff;border:none;padding:10px;border-radius:8px;cursor:pointer;z-index:11}}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded',()=>{const sidebar=document.querySelector('.sidebar');const toggle=document.querySelector('.toggle-btn');if(toggle){toggle.addEventListener('click',()=>{sidebar.classList.toggle('open');});}});
    </script>
</head>
<body>
<button class="toggle-btn">☰</button>
<div class="sidebar">
    <h2>HSMA</h2>
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
    <a href="{{ route('dashboard.users') }}" class="{{ request()->routeIs('dashboard.users') ? 'active' : '' }}">👥 All Users</a>
    <a href="{{ route('dashboard.messages') }}" class="{{ request()->routeIs('dashboard.messages') ? 'active' : '' }}">💬 Messages</a>
    <a href="{{ route('dashboard.new-message') }}" class="{{ request()->routeIs('dashboard.new-message') ? 'active' : '' }}">✉️ New Message</a>
    <a href="{{ route('dashboard.contacts') }}" class="{{ request()->routeIs('dashboard.contacts') ? 'active' : '' }}">📇 Contacts</a>
    <a href="{{ route('logout') }}">🚪 Logout</a>
</div>

<div class="main-content">
    <div class="header">
        <h1>@yield('title', 'Dashboard')</h1>
        <div class="user-info">
            <span>{{ session('user')->name ?? 'Guest' }}</span>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>
