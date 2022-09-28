<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i < 10;$i++) {
            $randinstructorid = DB::table('instructors')->pluck('id')->random();
            $randCategoryid = DB::table('categories')->pluck('id')->random();
            Course::factory()->create([
                'instructor_id' => $randinstructorid,
                'category_id' => $randCategoryid
            ]);
        }
    }
}
