<?php

Route::get('/', 'publicPagesController@index')->name('public.home');

//PUBLICS PAGES
Route::get('proformas-construccion','publicPagesController@ultimas_proformas')
	->name('public.proformas');

Route::post('buscar-proformas', 'publicPagesController@buscar_proformas')
	->name('public.buscar_proformas');

Route::get('anuncios_categoria', 'publicPagesController@buscar_anuncio_categoria')
	->name('public.buscar_anuncio_categoria');

Route::get('proforma/{ad}/{title}', 'publicPagesController@ver_proforma')
	->name('public.ver_proforma');




Route::get('privacidad-seguridad', function(){
	return "Privacidad y Seguridad";
})->name('public.seguridad');

Route::get('como-funciona-vipproformas', function(){
	return "Como Funciona?";
})->name('public.about');

Route::get('contactos-vipproformas', function(){
	return "Contactanos";
})->name('public.contactos');


//USER PAGES
Route::get('nuevo-anuncio','userPageController@crearAnuncio')->name('user.nuevo_anuncio');
