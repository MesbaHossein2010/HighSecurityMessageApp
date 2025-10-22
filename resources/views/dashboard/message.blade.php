@extends('layouts.dashboard')

@section('title', 'Your Messages')

@section('content')
    <section style="background:#1f1f1f;padding:20px;border-radius:12px;box-shadow:0 0 15px rgba(0,0,0,0.3);overflow-x:auto;">
        <h2 style="color:#4f46e5;margin-bottom:20px;font-size:1.6rem;">Your Messages</h2>
        <table style="width:100%;border-collapse:collapse;">
            <thead>
            <tr style="background:#2a2a2a;color:#e0e0e0;">
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">ID</th>
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">From</th>
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">To</th>
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">Content</th>
                <th style="padding:12px 15px;text-align:left;border-bottom:2px solid #4f46e5;">Sent At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr style="border-bottom:1px solid #333;background:#1f1f1f;transition:all 0.3s ease;">
                    <td style="padding:10px 15px;">{{ $message->id }}</td>
                    <td style="padding:10px 15px;">{!! $message->sender->name == session('user')->name? '<h4 style="color: cyan;">me</h4>': $message->sender->name !!}</td>
                    <td style="padding:10px 15px;">{!! $message->receiver->name == session('user')->name? '<h4 style="color: cyan;">me</h4>': $message->receiver->name !!}</td>
                    <td style="padding:10px 15px;max-width:400px;word-break:break-word;">{{ $message->content }}</td>
                    <td style="padding:10px 15px;">{{ $message->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
