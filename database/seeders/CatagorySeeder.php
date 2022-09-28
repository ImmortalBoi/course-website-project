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
            'Auditing',
            'Communication Skills',
            'Customer Service',
            'E-commerce',
            'Health And Safety',
            'Hospitality',
            'Human Resources',
            'ISO',
            'Management',
            'Manufacturing',
            'Marketing',
            'Microsoft',
            'Motivation',
            'Operations',
            'Productivity',
            'Quality Management',
            'Sales',
            'Supply Chain Management',
            'Automotive Engineering',
            'Carpentry',
            'Compliance',
            'Construction',
            'Electrical Engineering',
            'Engineering',
            'Kaizen',
            'Kanban',
            'Lean',
            'Operations',
            'Renewable Energy',
            'Risk Management',
            'Six Sigma',
            'AWS',
            'Administration',
            'Business Management',
            'CCNA',
            'Comptia',
            'Computer Networking',
            'Cryptocurrency',
            'Data Science',
            'Data Security',
            'Databases',
            'DevOps',
            'Information Systems',
            'Network Security',
            'Programming',
            'Security',
            'Server',
            'Small Business'
            ];
        foreach ($categorylist as $index) {
            Category::create([
                'category_name' => $index
        ]);
        }
    }
}
