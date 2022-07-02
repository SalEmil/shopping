<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone mobile',
                'price' => 500,
                'description' => 'A smartphone with 8GB ram and much more feature',
                'category' => 'mobile',
                'gallery' => 'https://images.macrumors.com/t/GZlU6ecoS3wViR8OVXtgFkPkyFQ=/2244x/article-new/2022/01/iPhone-14-Mock-Pill.jpg'
            ],
            [
                'name' => 'Samsung mobile',
                'price' => 350,
                'description' => 'A smartphone A51',
                'category' => 'mobile',
                'gallery' => 'https://www.notebookcheck-ru.com/fileadmin/Notebooks/Samsung/Galaxy_A51/SM_A515_GalaxyA51_Blue_Back.jpg'
            ],
            [
                'name' => 'LG Oled',
                'price' => 800,
                'description' => 'LG TVs:OLED,LED,$K and 8K Smart Tv',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/us/images/tvs/md08000710/350.jpg'
            ],
            [
                'name' => 'Bosch fridge',
                'price' => 600,
                'description' => 'Bosch KAN93VIFP No Frost Fridge',
                'category' => 'fridge',
                'gallery' => 'https://www.tradeinn.com/f/13774/137740039/bosch-kan93vifp-no-frost-fridge.jpg'
            ],
        ]);
    }
}
