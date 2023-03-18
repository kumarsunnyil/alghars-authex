<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\StudentUser;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentUser>
 */
class StudentUserFactory extends Factory
{

    protected $model = StudentUser::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return[
            'name' => $this->faker->name,
            'age' =>  rand(10,15)."",
            'email' => $this->faker->email,
            'username' => $this->faker->username,
            'grade' => rand(1,12),
            'password' => "test123password", // TODO temporary stub to be later removed

            'password' => $this->faker->password,
            'p_name' => $this->faker->name,
            'phone' => rand(8700000000,9999999999), //$this->faker->phone,
            'location' => 'Bangalore',
            'program_name' => 'testProgram',
            'message' => Str::random(40),  //$this->faker->message,
        ];
    }
}
