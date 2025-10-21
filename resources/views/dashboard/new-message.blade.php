@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Send New Message</h2>
        <form method="POST" action="{{ route('dashboard.send-message') }}">
            @csrf
            <label>Recipient:</label>
            <select name="receiver_id" required>
                @foreach($users as $user)
                    @if($user->id != session('user')->id)
                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                    @endif
                @endforeach
            </select>

            <label>Message:</label>
            <textarea name="content" rows="5" placeholder="Type your message..." required></textarea>

            <button type="submit">Send</button>
        </form>
    </section>
@endsection
