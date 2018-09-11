<?php

use Illuminate\Database\Seeder;
use App\State;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provincias = [
            'AZUAY','BOLIVAR','CAÑAR','CARCHI','COTOPAXI','CHIMBORAZO','EL ORO','ESMERALDAS','GUAYAS','IMBABURA','LOJA','LOS RIOS','MANABI','MORONA SANTIAGO','NAPO','PASTAZA','PICHINCHA','TUNGURAHUA','ZAMORA CHINCHIPE','GALAPAGOS','SUCUMBIOS','ORELLANA','SANTO DOMINGO','SANTA ELENA','ZONAS NO LIMITADAS',

        ];

        foreach ($provincias as $provincia) {
            State::create([
            'name'=>$provincia
        ]);
        }
        
    }
}
