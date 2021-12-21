<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        DB::table('books')->truncate();
        DB::table('categories')->truncate();

        DB::table('users')->insert([
            'name' => 'Muhammad Basri',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('basri123'),
        ]);

        $categories = ['Sekolah', 'Kuliah', 'Umum', 'Lainnya'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }

        for ($i=0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'username' => Str::lower(Str::random(5)),
                'email' => $faker->email,
                'password' => Hash::make(12345),
            ]);
        }
                Schema::enableForeignKeyConstraints();

    }
}
