<?php

namespace Database\Factories;

use App\Models\Contribution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_cus'=>$this->faker->ean8(),
            'contribute_id'=>$this->faker->swiftBicNumber(),
            'full_name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'messages'=>$this->faker->text(600),
            'contribute_amount'=>random_int(100,5000),
            'country'=>$this->faker->countryCode(),
            'id_post'=>random_int(1,50),
            'status'=>'COMPLETED'
        ];
    }
}
