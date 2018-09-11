<?php

use Illuminate\Database\Seeder;
use App\Category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::create([
        	'name'=>'Construcción',
        	'icon'=>'<i class="far fa-building"></i>',
        ]);

        Category::create([
        	'name'=>'Consultoria',
        	'icon'=>'<i class="fas fa-crosshairs"></i>',
        ]);

        Category::create([
        	'name'=>'Carpinteria de Madera',
        	'icon'=>'<i class="fas fa-tree"></i>',
        ]);

        Category::create([
        	'name'=>'Adecuaciones',
        	'icon'=>'<i class="fas fa-paint-brush"></i>',
        ]);

    }
}
