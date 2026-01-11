<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// pastikan APP_ENV pada file .env kalian adalah local yah, APP_ENV=local, agar admin bisa dibuka dilaptop
class DatabaseSeeder extends Seeder
{
 
    public function run(): void
    {
 
        // --- BAGIAN 2: DUMMY DATA (Hanya Jalan di Laptop) ---
        if (app()->environment('local')) {
            
            $this->command->info('Mode Local terdeteksi: Membuat data dummy...');

            // Buat 50 user acak buat ngetes paging
            User::factory(50)->create();
            
            // Buat 1 User Admin KHUSUS DEV (Biar di laptop gak perlu ketik command)
            // Tapi ingat, password ini cuma buat di laptop!
            User::factory()->create([
                'name' => 'Dev Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            
            $this->command->info('Data dummy berhasil dibuat!');
        }
    }
}