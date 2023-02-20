<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use illuminate\support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <15 ; $i++) { 
            $newProject = new Project();
            $newProject->title = $faker->unique()->realTextBetween(5, 40);
            $newProject->slug = Str::slug($newProject->title);
            $newProject->thumbnail = $faker->imageUrl();
            $newProject->description = $faker->realTextBetween(50, 300);
            $newProject->creation_date = $faker->dateTimeThisDecade();
            $newProject->save();
        }
    }
}
