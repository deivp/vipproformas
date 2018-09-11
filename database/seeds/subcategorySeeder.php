<?php

use Illuminate\Database\Seeder;
use App\Subcategory;
use App\Category;

class subcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_id_constr = Category::where('name','Construcción')->value('id');

    	Subcategory::create([
    		'name'=>'Construcción',
    		'categoria_id'=>$categoria_id_constr,
    	]);
    	

    	$categoria_id_consultoria = Category::where('name','Consultoria')->value('id');

    	Subcategory::create([
    		'name'=>'Diseño Arquitectónico',
    		'categoria_id'=>$categoria_id_consultoria,
    	]);
    	Subcategory::create([
    		'name'=>'Diseño Estructural',
    		'categoria_id'=>$categoria_id_consultoria,
    	]);
    	Subcategory::create([
    		'name'=>'Diseño Hidrosanitario',
    		'categoria_id'=>$categoria_id_consultoria,
    	]);
    	Subcategory::create([
    		'name'=>'Diseño Eléctrico',
    		'categoria_id'=>$categoria_id_consultoria,
    	]);


    	$categoria_id_carpinteria = Category::where('name','Carpinteria de Madera')->value('id');

    	Subcategory::create([
    		'name'=>'Muebles de madera en general',
    		'categoria_id'=>$categoria_id_carpinteria,
    	]);
    	Subcategory::create([
    		'name'=>'Muebles en MDF',
    		'categoria_id'=>$categoria_id_carpinteria,
    	]);
    	Subcategory::create([
    		'name'=>'Puertas en madera y en MDF',
    		'categoria_id'=>$categoria_id_carpinteria,
    	]);
    	Subcategory::create([
    		'name'=>'Pergolas',
    		'categoria_id'=>$categoria_id_carpinteria,
    	]);
    	Subcategory::create([
    		'name'=>'Lacar puertas',
    		'categoria_id'=>$categoria_id_carpinteria,
    	]);

    	$categoria_id_adecuaciones = Category::where('name','Adecuaciones')->value('id');

    	
    	Subcategory::create([
    		'name'=>'Arquitectura y decoración',
    		'categoria_id'=>$categoria_id_adecuaciones,
    	]);
    	Subcategory::create([
    		'name'=>'Albañeria',
    		'categoria_id'=>$categoria_id_adecuaciones,
    	]);
    	Subcategory::create([
    		'name'=>'Adecuaciones de vivienda',
    		'categoria_id'=>$categoria_id_adecuaciones,
    	]);
    	Subcategory::create([
    		'name'=>'Suelos',
    		'categoria_id'=>$categoria_id_adecuaciones,
    	]);

    }
}
