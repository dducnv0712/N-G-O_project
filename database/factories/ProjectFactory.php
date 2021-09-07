<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "image"=>$this->faker->imageUrl(800,800,'abstract'),
            "author"=>random_int(1,27),
            "approval"=>1,
            "title"=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
            "contribute"=>random_int(0,10000),
            "active"=>0,
            "important"=>1,
            "send_mail"=>1,
            "description"=>$this->faker->text(500),
            "content"=>$this->faker->text(4500),
            "category_id"=>random_int(1,7)

        ];
    }
}
