<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSMA Dashboard</title>
    <style>
        *{box-sizing:border-box;margin:0;padding:0;font-family:'Poppins',sans-serif}body{display:flex;min-height:100vh;background:#121212;color:#e0e0e0}aside{width:220px;background:#1a1a1a;display:flex;flex-direction:column;padding:20px;position:fixed;height:100vh}aside h2{text-align:center;color:#4f46e5;margin-bottom:30px}aside a{color:#e0e0e0;text-decoration:none;padding:10px 15px;margin-bottom:10px;border-radius:8px;display:block;transition:all 0.3s}aside a:hover{background:#4f46e5;color:#fff;transform:translateX(5px)}main{margin-left:220px;padding:30px;flex:1;overflow-y:auto}section{margin-bottom:40px}h1,h2,h3,h4,h5,h6{margin-bottom:15px}button{padding:10px 15px;background:#4f46e5;color:#fff;border:none;border-radius:8px;cursor:pointer;transition:all 0.3s}button:hover{transform:translateY(-2px) scale(1.05);box-shadow:0 4px 15px rgba(79,70,229,0.6)}table{width:100%;border-collapse:collapse}th,td{padding:12px;text-align:left;border-bottom:1px solid #333}tr:hover{background:#1f1f1f}input,textarea{padding:10px;border-radius:8px;border:2px solid #333;background:#1a1a1a;color:#e0e0e0;width:100%;transition:all 0.3s}input:focus,textarea:focus{border-color:#4f46e5;outline:none}}
    </style>
</head>
<body>

<aside>
    <h2>HSMA</h2>
    <a href="{{ route('dashboard') }}">Welcome</a>
    <a href="{{ route('dashboard.users') }}">All Users</a>
    <a href="{{ route('dashboard.messages') }}">Your Messages</a>
    <a href="{{ route('dashboard.new-message') }}">New Message</a>
</aside>

<main>
    @yield('content')
</main>

</body>
</html>
