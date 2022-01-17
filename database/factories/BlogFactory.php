<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // $table->foreignId('category_id');
        // $table->foreignId('user_id');
        // $table->string('title');
        // $table->string('slug')->unique();
        // $table->text('excerpt');
        // $table->text('body');

        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->unique()->slug(3),
            'excerpt' => $this->faker->sentence(10),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>'
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")->implode('')
        ];
    }
}
