<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummyData = [
            [
                'name' => 'John Doe',
                'email' => 'admin@tunasniaga.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => \Str::random(10),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => \Str::random(10),
            ],
            // Add more dummy users as needed
        ];

        foreach ($dummyData as $value) {
            $article = new User();
            foreach ($value as $key => $val) {
                $article->{$key} = $val;
            }
            $article->save();
        }
    }
}
