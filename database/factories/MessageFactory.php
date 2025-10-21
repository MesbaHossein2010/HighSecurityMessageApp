<?php

namespace Database\Factories;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition(): array
    {
        $users = count(User::all());

        return [
            'sender_id' => $this->faker->numberBetween(1, $users),
            'receiver_id' => $this->faker->numberBetween(1, $users),
            'content' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
