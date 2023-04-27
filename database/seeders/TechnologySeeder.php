<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Project;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['Java', 'Vue', 'Html', 'Laravel', 'CSS', 'SCSS'];

        foreach($technologies as $technology){
            $new_technology = new Technology(); 
            $new_technology->name = $technology;
            $new_technology->save();
        }
        
    }
}
