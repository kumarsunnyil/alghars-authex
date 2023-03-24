<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentUser>
 */
class ScreenUserFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'username' => $this->faker->username,
            'password' => 'admin123'
        ];


    }
}
