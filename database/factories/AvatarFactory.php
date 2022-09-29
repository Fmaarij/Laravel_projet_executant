<?php

namespace Database\Factories;

use App\Models\Avatar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avatar>
 */
class AvatarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $image = $this->faker->image(
        //     dir:storage_path('app/public/avatar'),
        //     width:640,
        //     height:480,
        //     fullPath:false,
        // );

        return [
            'avatar_name' => $this->faker->lastName,
            // 'img' => $this->faker->imageUrl
            'img' => $this->faker->imageUrl()
        ];

    }
}
