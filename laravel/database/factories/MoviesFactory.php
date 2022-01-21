<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MoviesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name(); // 画像に記述する文字列をランダム生成
        return [

            'title' => $title,
            'image_url' => $this->faker->imageUrl(100,100,$title)
        ];
    }
}
