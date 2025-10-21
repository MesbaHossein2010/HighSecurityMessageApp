@extends('layouts.dashboard')

@section('content')
    <section>
        <h2>Your Messages</h2>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>From</th>
                <th>To</th>
                <th>Content</th>
                <th>Sent At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->sender->name }}</td>
                    <td>{{ $message->receiver->name }}</td>
                    <td>{{ $message->content }}</td>
                    <td>{{ $message->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
