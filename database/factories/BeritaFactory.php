<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Judul' => fake()->sentence(mt_rand(1,5)),
            'Slug' => fake()->unique()->slug(),
            'excerpt' => fake()->paragraph(mt_rand(10,20)),
            'isi' => collect(fake()->paragraphs(mt_rand(2,5)))->map(fn($p) => "<p>$p</p>")->implode(''),
            'Gambar' => 'Gambar/no-image.jpg'
        ];
    }   
}
