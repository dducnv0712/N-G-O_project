<?php

namespace Database\Factories;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Factories\Factory;

class VolunteerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Volunteer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'image' => 'https://source.unsplash.com/random',
            'email' => $this->faker->unique()->safeEmail(),
            'phone'=>$this->faker->unique()->phoneNumber(),
            'office'=>'Volunteer',
            'education'=>$this->faker->company(),
            'introduce'=>$this->faker->text(150),
            'address'=>$this->faker->address(),
            'birthday'=>$this->faker->date(),
            'occupation'=>$this->faker->jobTitle(),
            'important'=>1,
            'approval'=>0,
            'messages'=>$this->faker->text(300),


        ];
    }
}
