<?php

namespace Database\Factories;

use App\Models\Employee;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'company_id' => random_int(1, 3),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'job_title' => $this->faker->jobTitle,
            'phone_number' => $this->faker->phoneNumber,
            'is_hired' => $this->faker->boolean,
        ];
    }
}
