<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'Admin Website',
            'alamat' => 'Secret',
            'nomor' => 'Secret',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'status' => 'admin',
        ]);
    }
}
/*$table->string('nama');
            $table->string('alamat');
            $table->string('nomor');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status');