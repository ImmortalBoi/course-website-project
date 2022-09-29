<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'category_name' => 'Accounting'
        ]);
        $categorylist = [
            'Operations',
            'Productivity',
            'Quality Management',
            'Supply Chain Management',
            'Electrical Engineering',
            'Engineering',
            'Risk Management',
            'Administration',
            'Business Management',
            ];
        foreach ($categorylist as $index) {
            Category::create([
                'category_name' => $index
        ]);
        }
    }
}
