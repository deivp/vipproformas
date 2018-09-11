<?php

use Illuminate\Database\Seeder;
use App\Ad;
use App\User;
use App\Category;
use App\Subcategory;

class adSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $categoria_a = Subcategory::where('name','Construcción')->value('name');
        $subcategoria_a = Category::where('name','Construcción')->value('name');
    	$usuario_a = User::where('email','david@gmail.com')->value('id');
        
        $usuario_b = User::where('email','silvia@gmail.com')->value('id');
        $categoria_b = Category::where('name','Adecuaciones')->value('name');
        $subcategoria_b = Subcategory::where('name','Arquitectura y decoración')->value('name');



        factory(\App\ad::class)->create([
        	'user_id'=>$usuario_a,
            'category'=>$categoria_a,
            'subcategory'=>$subcategoria_b,
        	'title'=>'Construcción Puente de San Rafael',
        	'description'=>'Planificacion y desarrollo del puente de San Rafael en la ciudad de Otavalo, materual 100% antisismico',
        	'price'=>'25000',
        	'imagen_1'=>'avatar_trab_a.png',
        	'imagen_2'=>'avatar_trab_b.png',
        	'imagen_3'=>'avatar_trab_c.png',
        	'video'=>'https://www.youtube.com/watch?v=6yuj2qL2RV8',
        	'state'=>'Imbabura',
        	'city'=>'Otavalo',
        	'status'=>'1',
        ]);

        factory(\App\ad::class)->create([
            'user_id'=>$usuario_b,
            'category'=>$categoria_b,
            'subcategory'=>$subcategoria_b,
            'title'=>'Restauración de monumentos',
            'description'=>'Pintura y retoques de estatuas del centro historico',
            'price'=>'8000',
            'imagen_1'=>'avatar_trab_a.png',
            'imagen_2'=>'avatar_trab_b.png',
            'imagen_3'=>'avatar_trab_c.png',
            'video'=>'https://www.youtube.com/watch?v=3MxEK9hI9vQ',
            'state'=>'Pichincha',
            'city'=>'Quito',
            'status'=>'1',
        ]);

        factory(\App\ad::class,10)->create([
            'user_id'=>$usuario_a,
            'category'=>$categoria_a,
            'subcategory'=>$subcategoria_a,
            'imagen_1'=>'avatar_trab_c.png',
            'imagen_2'=>'avatar_trab_b.png',
            'imagen_3'=>'avatar_trab_a.png',
            'video'=>'https://www.youtube.com/watch?v=cC9iyYDjJ2s',
            'state'=>'Pichincha',
            'city'=>'Quito',
            'status'=>'1',
        ]);

        factory(\App\ad::class,10)->create([
            'user_id'=>$usuario_b,
            'category'=>$categoria_b,
            'subcategory'=>$subcategoria_b,
            'imagen_1'=>'avatar_trab_b.png',
            'imagen_2'=>'avatar_trab_c.png',
            'imagen_3'=>'avatar_trab_a.png',
            'video'=>'https://www.youtube.com/watch?v=cC9iyYDjJ2s',
            'state'=>'Guayas',
            'city'=>'Guayaquil',
            'status'=>'1',
        ]);


    }
}
