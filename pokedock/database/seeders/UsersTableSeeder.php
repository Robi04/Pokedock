<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer un utilisateur avec le nom d'utilisateur "root" et le mot de passe "root"
        User::create([
            'name' => 'root',
            'email' => 'root@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('root'),
            'remember_token' => Str::random(10),
            'current_team_id' => null, // Vous pouvez ajuster cela selon vos besoins
            'profile_photo_path' => null, // Vous pouvez ajuster cela selon vos besoins
        ]);

        // Créez d'autres utilisateurs si nécessaire
    }
}
