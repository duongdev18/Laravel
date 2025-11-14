<?php
namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;
use App\Models\Book; // Đảm bảo import model Book

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Vô hiệu hóa hoặc giữ lại phần User tùy ý bạn
        
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        // 1. Chạy CategorySeeder trước
        $this->call([
            CategorySeeder::class,
        ]);

        // 2. Dùng Factory tạo 100 cuốn sách
        Book::factory(100)->create();
    }
}
