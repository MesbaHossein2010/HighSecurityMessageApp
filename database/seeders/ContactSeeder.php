<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            // Pick 3–6 random other users as contacts
            $contacts = User::where('id', '!=', $user->id)->inRandomOrder()->take(rand(10, 20))->get();

            foreach ($contacts as $contact) {
                Contact::firstOrCreate([
                    'user_id' => $user->id,
                    'contact_id' => $contact->id,
                ]);
            }
        }
    }
}
