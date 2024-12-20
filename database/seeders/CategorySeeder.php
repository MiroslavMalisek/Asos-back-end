<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Mobily',
        ]);

        Category::create([
            'name' => 'Notebooky',
        ]);

        Category::create([
            'name' => 'Tlačiarne',
        ]);

        Category::create([
            'name' => 'Monitory',
        ]);

        Category::create([
            'name' => 'Televízory',
        ]);

        Category::create([
            'name' => 'Príslušenstvo',
        ]);
    }
}
