<?php

use Illuminate\Database\Seeder;
use App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([

        	'name'=>'David isama',
        	'email'=>'david@gmail.com',
        	'dni'=>'1003712880',
        	'movil'=>'0992901334',
        	'state'=>'Pichincha',
        	'city'=>'Quito',
        	'rol'=>'0',
        	'status'=>'1',
        	'password'=>bcrypt(1234),

        ]);

        factory(User::class)->create([

        	'name'=>'Silvia Pilataxi',
        	'email'=>'silvia@gmail.com',
        	'dni'=>'0604463760',
        	'movil'=>'0959678531',
        	'state'=>'Chimborazo',
        	'city'=>'Riobamba',
        	'rol'=>'0',
        	'status'=>'1',
        	'password'=>bcrypt(1234),

        ]);

        factory(User::class, 10)->create([
            'state'=>'Pichincha',
            'city'=>'Quito',
            'rol'=>'0',
            'status'=>'1',
        ]);

    }
}
