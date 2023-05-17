<?php

namespace Database\Seeders;


use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'user_id' => 1,
                'menu' => "Rib-eye Steak",
                'restaurant' => "Rolando's Cafe",
                'recipe' => "Lorep ipsum pakuluan ihawin bahala na",
                'video_url' => "Lorep ipsum pakuluan ihawin bahala na",
                'price' => 3199.00,
                'img' => 'rib.jpg'
            ]
        );

    }
}
