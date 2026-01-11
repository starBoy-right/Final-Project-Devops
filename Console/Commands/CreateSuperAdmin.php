<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateSuperAdmin extends Command
{
    protected $signature = 'user:create-admin';

    protected $description = 'Membuat user Super Admin secara aman dan interaktif';

    public function handle()
    {
        $this->info('--- PEMBUATAN SUPER ADMIN ---');

        // 1. Input Email
        $email = $this->ask('Masukkan Email Admin');

        // Validasi apakah email sudah ada
        if (User::where('email', $email)->exists()) {
            $this->error("Error: User dengan email '$email' sudah terdaftar!");
            return;
        }

        // 2. Input Nama
        $name = $this->ask('Masukkan Nama Admin', 'Super Admin'); // Default 'Super Admin'

        // 3. Input Password (Hidden/Rahasia)
        $password = $this->secret('Masukkan Password (Ketik saja, tidak akan muncul di layar)');
        
        // Konfirmasi Password
        $confirmPassword = $this->secret('Ulangi Password');

        if ($password !== $confirmPassword) {
            $this->error('Error: Password tidak cocok! Silakan ulangi.');
            return;
        }

        // 4. Proses Simpan ke Database
        $this->info('Sedang membuat user...');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => now(), // Langsung verifikasi agar bisa login
        ]);

        $this->info('SUCCESS! Super Admin berhasil dibuat.');
        $this->line("Email: $email");
        $this->line("Silakan login di halaman admin.");
    }
}