<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'name',
            'email' => 'ExampleEmail@gmail.com',
            'subject' => 'example contact',
            'message' => 'this is an example message'
        ]);
        Contact::factory()->count(100)->create();
    }
}
