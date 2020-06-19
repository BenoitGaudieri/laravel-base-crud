<?php

use Illuminate\Database\Seeder;

use App\Teacher;

use Faker\Generator as Faker;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records = 50;
        for ($i = 0; $i < $records; $i++) {
            // random gender
            $gender = $faker->randomElement(["male", "female"]);
            $genderShort = ($gender == "male") ? "m" : "f";

            $newTeacher = new Teacher();
            $newTeacher->name = $faker->name($gender);
            $newTeacher->age = $faker->numberBetween(18, 70);
            $newTeacher->gender = $genderShort;
            $newTeacher->class = "classe {$faker->numberBetween(18, 70)}";
            $newTeacher->save();
        }
    }
}
