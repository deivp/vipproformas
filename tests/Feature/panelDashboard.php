<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class panelDashboard extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    function paneLoginTrue(){

    	$user = factory(User::class)->create();

    	$this->actingAs($user)
    		->get(route('panel.mis_proformas'))
    		->assertSee('Mis Proformas')
    		->assertStatus(200);
    }

    function panelLoginFalse(){
    	$this->get(route('panel.mis_proformas'))
    		->assertStatus(302)
    		->assertRedirect('inicio')
    }
}
