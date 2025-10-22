<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    public function definition(): array
    {
        $sender = User::inRandomOrder()->first();
        $receiver = User::where('id', '!=', $sender->id)->inRandomOrder()->first();

        return [
            'user_id' => $sender->id,
            'contact_id' => $receiver->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
