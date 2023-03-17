<?php

namespace Database\Factories;
//use App\Models\StudentUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentUser>
 */
class StudentUserFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentUser::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'age'=> $this->faker->age,
            'email'=> $this->faker->email,
            'username'=> $this->faker->username,
            'email_verified_at'=> $this->faker->email_verified_at,
            'grade'=> $this->faker->ngradeame,

            'password'=> $this->faker->password,
            'p_name'=> $this->faker->p_name,
            'phone'=> $this->faker->phone,
            'location'=> $this->faker->namllocationocatione,
            'program_name'=> $this->faker->program_name,
            'message'=> $this->faker->message,
        ];
    }
}
