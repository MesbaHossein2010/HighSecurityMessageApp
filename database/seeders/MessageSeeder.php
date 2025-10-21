<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;
use App\Models\User;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        if ($users->count() < 2) {
            $this->command->info('Not enough users to generate messages.');
            return;
        }

        // Generate 50 random messages
        Message::factory()->count($users->count()*2)->create();
    }
}
