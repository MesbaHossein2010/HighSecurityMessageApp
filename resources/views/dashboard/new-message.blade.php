@extends('layouts.dashboard')

@section('title', 'New Message')

@section('content')
    <h1 style="margin-bottom:25px;font-size:1.6rem;color:#fff;">Send New Message</h1>

    @if(session('success'))
        <p style="color:#4ade80;margin-bottom:15px;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('dashboard.send-message') }}"
          style="display:flex;flex-direction:column;gap:15px;background:#1f1f1f;padding:20px;border-radius:12px;box-shadow:0 0 15px rgba(0,0,0,0.3);">
        @csrf

        <label for="receiver_id" style="color:#e0e0e0;font-weight:500;">Select Contact:</label>
        <select name="receiver_id" id="receiver_id" required
                style="padding:10px 15px;border:none;border-radius:8px;background:#2a2a2a;color:#e0e0e0;font-size:1rem;">
            <option value="">-- Choose contact --</option>
                @foreach($contacts as $contact)
                    <option value="{{ $contact->contact_id }}">{{ $contact->contact->name }} ({{ $contact->contact->email }})</option>
                @endforeach
        </select>
        @error('receiver_id')<span style="color:#f43f5e;">{{ $message }}</span>@enderror

        <label for="content" style="color:#e0e0e0;font-weight:500;">Message:</label>
        <textarea name="content" id="content" rows="5" required placeholder="Type your message..."
                  style="padding:10px 15px;border:none;border-radius:8px;background:#2a2a2a;color:#e0e0e0;font-size:1rem;resize:none;"></textarea>
        @error('content')<span style="color:#f43f5e;">{{ $message }}</span>@enderror

        <button type="submit" class="btn">Send Message</button>
    </form>
@endsection
