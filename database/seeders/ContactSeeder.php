<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contactTypes = [
            'personal',
            'work',
            'other'
        ];

        $userIds = User::pluck('id')->toArray();

        foreach ($contactTypes as $type) {
            for ($i = 1; $i <= 50; $i++) {
                Contact::create([

                    'user_id' => $userIds[array_rand($userIds)],
                    'name' => "ContactName{$i}_{$type}",
                    'last_name' => "ContactLastName{$i}_{$type}",
                    'email' => "contact{$i}_{$type}@example.com",
                    'phone' => '123-456-7890',
                    'address' => "123 {$type} St, City, Country",
                    'type' => $type,
                    'notes' => "This is a {$type} contact.",
                ]);
            }
        }
    }
}
