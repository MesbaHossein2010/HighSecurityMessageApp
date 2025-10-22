<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $user = session('user');
        $contacts = Contact::where('user_id', $user->id)
            ->with('contact')
            ->get();

        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'contact_id' => 'required|exists:users,id',
        ]);

        $user = session('user');

        Contact::firstOrCreate([
            'user_id' => $user->id,
            'contact_id' => $request->contact_id,
        ]);

        return redirect()->route('dashboard.contacts')->with('success', 'Contact added!');
    }

    public function destroy($id)
    {
        $user = session('user');

        Contact::where('user_id', $user->id)
            ->where('contact_id', $id)
            ->delete();

        return back()->with('success', 'Contact removed.');
    }
}
