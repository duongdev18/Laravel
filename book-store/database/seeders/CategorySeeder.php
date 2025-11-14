<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Tiểu Thuyết'],
            ['name' => 'Sách Khoa Học'],
            ['name' => 'Truyện Tranh (Manga/Comic)'],
            ['name' => 'Sách Kinh Tế'],
            ['name' => 'Sách Kỹ Năng Sống'],
        ]);
    }
}
