@extends('layouts.dashboard')

@section('title', 'All Users')

@section('content')
    <section style="background:#1f1f1f;padding:20px;border-radius:12px;box-shadow:0 0 15px rgba(0,0,0,0.3);overflow-x:auto;">
        <h2 style="color:#4f46e5;margin-bottom:20px;font-size:1.6rem;">All Users</h2>
        <table style="width:100%;border-collapse:collapse;">
            <thead>
            <tr style="background:#2a2a2a;color:#e0e0e0;">
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">ID</th>
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">Name</th>
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr style="border-bottom:1px solid #333;background:#1f1f1f;transition:all 0.3s ease;">
                    <td style="padding:10px 15px;">{{ $user->id }}</td>
                    <td style="padding:10px 15px;">{{ $user->name }}</td>
                    <td style="padding:10px 15px;">{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
