@extends('layouts.dashboard')

@section('content')
    <section>
        <h1>Welcome, {{ session('user')->name }}!</h1>
        <p>This is your High Security Message App dashboard. Use the sidebar to navigate through users, your messages, or compose a new message.</p>
    </section>
@endsection
