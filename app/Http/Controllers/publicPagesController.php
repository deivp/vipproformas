<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ad;
use Illuminate\Support\Facades\DB;
use App\State;
use App\Company;
use App\User;

class publicPagesController extends Controller

{

    

    public function index(){

        
        $categories = Category::all();
        $ads = Ad::limit(6)->get();
        $companies = Company::all();
        
        $total_ads = Ad::count();
        $total_companies = Company::count();
        $total_users = User::count();

        return view('inicio', compact('categories','ads','companies','total_ads','total_companies','total_users'));
    }

    public function ultimas_proformas(){

        $states = State::all();
        $categories = Category::all();


        $ads = DB::table('ads')
                    ->join('companies','ads.user_id','=','companies.user_id')
                    ->select('ads.*','companies.name_company','companies.image')
                    ->limit(20)
                    ->get();
    	return view('ultimas-proformas',compact('ads','states','categories'));
    }

    public function buscar_anuncio_categoria(){

        //$datos = request()->all();
        return "Buscar Anuncio por categoria ";
    }

    public function buscar_proformas(){
        $filtro = request()->all();
        $tag = $filtro['buscar'];
        
        $states = State::all();
        $categories = Category::all();


        $ads = Ad::where('category', $filtro['categoria'])->limit(20)->get();
        

        $total_ads = $ads->count();
    	
        return view('search_result',compact('ads','tag','states','categories','total_ads'));
    }


    public function ver_proforma(Ad $ad){

        $company = Company::where('id',$ad['user_id'])->first();
        $user = User::where('id',$ad['user_id'])->first();
        $similar_ads = Ad::where('category',$ad['category'])->get();

        //dd($ad,$company);
        return view('proforma',compact('ad','company','user','similar_ads'));
    }
}
