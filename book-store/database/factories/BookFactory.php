<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6), // Tiêu đề 6 từ
            'thumbnail' => $this->faker->imageUrl(400, 600, 'books', true), // Ảnh mô tả
            'author' => $this->faker->name(), // Tác giả
            'publisher' => $this->faker->company(), // Nhà xuất bản
            'publication' => $this->faker->dateTimeThisCentury(), // Ngày ngẫu nhiên
            'price' => $this->faker->randomFloat(2, 50000, 1000000), // Giá từ 50k - 1tr
            'quantity' => $this->faker->numberBetween(10, 200), // Số lượng
            'category_id' => $this->faker->numberBetween(1, 5), // Mã loại (vì có 5 loại)
        ];
    }
}
