<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => [
                'uz' => 'Stol',
                'ru' => 'Cтол'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Divan',
                'ru' => 'Диван'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Kreslo',
                'ru' => 'Кресло'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Yotoq',
                'ru' => 'Йоток'
            ],
        ]);
        Category::create([
            'name' => [
                'uz' => 'Stul',
                'ru' => 'Стул'
            ],
        ]);



    }
}
