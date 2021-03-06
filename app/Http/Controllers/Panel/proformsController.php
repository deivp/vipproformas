<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Company;
use App\Ad;
use App\Category;
use App\State;
use Illuminate\Support\Facades\Auth;

class proformsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $company = Company::where('user_id',Auth::User()->id)->first();
        $ads = Ad::orderbY('id','DESC')->where('user_id',Auth::User()->id)->get();
        return view('panel.mis_proformas', compact('company','ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        $states = State::all();
        $company = Company::where('user_id',Auth::User()->id)->first();
        return view('panel.create',compact('categories','states','company'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = request()->validate([
            'title'=>'required',
            'price'=>'',
            'description'=>'required|min:5',
            'category'=>'required',
            'state'=>'required',
        ],
        [
            'title.required'=>'Escribe un titulo para la proforma',
            'description.min'=>'La descripción debe tener mínimo 5 caracteres',
            'description.required'=>'Complete la descripción de la proforma',
            'category.required'=>'Debe seleccionar la categoria de la proforma',
            'state.required'=>'Debe seleccionar una provincia',
        ]
    );
        
        if($ad['price']==null){
            $price = 0;
        }else{
            $price = $ad['price'];
        }
        
        //dd($ad['state']);

        Ad::create([
            'state'=>$ad['state'],
            'user_id'=>Auth::User()->id,
            'title'=>$ad['title'],
            'price'=>$price,
            'description'=>$ad['description'],
            'category'=>$ad['category'],
            'imagen_1'=>'avatar_trab_b.png',
            'imagen_2'=>'avatar_trab_a.png',
            'imagen_3'=>'avatar_trab_c.png',
            

        ]);

        return redirect('panel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $company = Company::where('user_id',Auth::User()->id)->first();
        $ad = Ad::where('id',$id)->first();
        $categories = Category::all();
        $states = State::all();
        return view('panel.show',compact('ad','company','categories','states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Ad $ad)
    {
        

        $ad_data = request()->validate([
            'title'=>'required',
            'description'=>'required|min:5',
            'category'=>'required',
            'state'=>'required',
        ],[
            'title.required'=>'Escribe un titulo para la proforma',
            'description.min'=>'La descripción debe tener mínimo 5 caracteres',
            'description.required'=>'Complete la descripción de la proforma',
            'category.required'=>'Debe seleccionar la categoria de la proforma',
            'state.required'=>'Debe seleccionar una provincia',
        ]);


        $ad_data = request()->all();


        Ad::where('user_id',Auth::user()->id)->update(['state'=>$ad_data['state']]);

        $ad->update($ad_data);

        return redirect()->route('panel.ver_proforma',['ad'=>$ad])->with("msj_edit",'mensaje');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {   
        $ad->delete();  

        return redirect()->route('panel.mis_proformas');
    }
}
