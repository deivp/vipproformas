<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	$this->borrar_test_tablas([
    		'users',
    		'categories',
    		'subcategories',
            'companies',
            'states',
            'ads',
            'payments',
    	]);

        $this->call(userSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(subcategorySeeder::class);
        $this->call(companySeedeer::class);
        $this->call(stateSeeder::class);
        $this->call(adSeeder::class);
        $this->call(paySeeder::class);

    }

    public function borrar_test_tablas(array $tablas){

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

    	foreach ($tablas as $tabla) {
    		DB::table($tabla)->truncate();
    	}

    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');


    }
}
