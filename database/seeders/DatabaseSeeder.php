<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Fattaliya Zikra",
            'email' => 'zikra@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            ProductCategorySeeder::class,
            ProductSeeder::class
        ]);
    }
}
