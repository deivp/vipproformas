<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Company;
use App\Category;

class companySeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario_id_a = User::where('email','david@gmail.com')->value('id');
        $categoria_a = Category::where('name','Construcción')->value('name');

        factory(\App\company::class)->create([
        	'user_id'=>$usuario_id_a,
        	'image'=>'avatar_user.png',
        	'name_company'=>'ISP-CORP',
        	'profession'=>'Ingenieria Civil',
        	'company_age'=>'4',
        	'category'=>$categoria_a,
        	'description'=>'Somos una empresa dedicado a la construccion de Edificaciones Medianas y Grandes',
        	'employees'=>'8',

        ]);

        $usuario_id_b = User::where('email','silvia@gmail.com')->value('id');
        $categoria_b = Category::where('name','Adecuaciones')->value('name');

        factory(\App\company::class)->create([
        	'user_id'=>$usuario_id_b,
        	'image'=>'avatar_user.png',
        	'name_company'=>'Silvia & Melody S.A.',
        	'profession'=>'Direccion de Proyectos',
        	'company_age'=>'2',
        	'category'=>$categoria_b,
        	'description'=>'Nos dedicamos a la reconstruccion de casas y departamentos, remodelamos todo tu patio y espacios verdes',
        	'employees'=>'19',

        ]);
        
        

        factory(\App\company::class)->create([
            'image'=>'avatar_user.png',
            'category'=>'Carpinteria de Madera',
        ]);
        factory(\App\company::class)->create([
            'image'=>'avatar_user.png',
            'category'=>'Plomeria',
        ]);
        factory(\App\company::class)->create([
            'image'=>'avatar_user.png',
            'category'=>'Jardinería',
        ]);
        factory(\App\company::class)->create([
            'image'=>'avatar_user.png',
            'category'=>'Pintura y estucos',
        ]);
        factory(\App\company::class)->create([
            'image'=>'avatar_user.png',
            'category'=>'Gipsum',
        ]);
        factory(\App\company::class)->create([
            'image'=>'avatar_user.png',
            'category'=>'Electricidad',
        ]);

    }
}
