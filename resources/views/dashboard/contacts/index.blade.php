@extends('layouts.dashboard')

@section('title', 'Contacts')

@section('content')
    <h1 style="margin-bottom:25px;font-size:1.6rem;color:#fff;">Your Contacts</h1>

    @if(session('success'))
        <p style="color:#4ade80;margin-bottom:15px;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('dashboard.contacts.add') }}" style="display:flex;align-items:center;gap:10px;margin-bottom:30px;">
        @csrf
        <select name="contact_id" required style="padding:10px 15px;background:#1f1f1f;color:#e0e0e0;border:none;border-radius:8px;font-size:1rem;">
            <option value="">Select user...</option>
            @foreach(\App\Models\User::where('id', '!=', session('user')->id)->get() as $user)
                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
            @endforeach
        </select>
        <button type="submit" style="padding:10px 15px;background:#4f46e5;color:#fff;border:none;border-radius:8px;font-size:1rem;cursor:pointer;transition:transform 0.2s,background 0.2s;">Add Contact</button>
    </form>

    <div style="background:#1a1a1a;padding:20px;border-radius:12px;box-shadow:0 0 15px rgba(0,0,0,0.3);">
        @forelse($contacts as $contact)
            <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid #2c2c2c;">
                <div>
                    <strong>{{ $contact->contact->name }}</strong>
                    <div style="font-size:0.9rem;color:#a1a1a1;">{{ $contact->contact->email }}</div>
                </div>
                <form method="POST" action="{{ route('dashboard.contacts.remove', $contact->contact_id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background:#e11d48;color:#fff;padding:6px 10px;border:none;border-radius:6px;cursor:pointer;transition:0.2s;">Remove</button>
                </form>
            </div>
        @empty
            <p style="color:#a1a1a1;">You have no contacts yet.</p>
        @endforelse
    </div>
@endsection
