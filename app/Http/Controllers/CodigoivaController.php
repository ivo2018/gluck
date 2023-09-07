<?php

namespace App\Http\Controllers;

use App\Models\Codigoiva;
use App\Http\Requests\StoreCodigoivaRequest;
use App\Http\Requests\UpdateCodigoivaRequest;

class CodigoivaController extends Controller
{
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $codigosiva=Codigoiva::all();
        return view('codigoiva.index',compact('codigosiva'));
      
   

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("codigoiva.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCodigoivaRequest $request)
    {
        $codigosiva=Codigoiva::create($request->all());
        return redirect()->route('home.show',$codigosiva);
                            
    }   

    /**
     * Display the specified resource.
     */
    public function show(Codigoiva $codigosiva)
    {
      $codigosiva=Codigoiva::where('id',$codigosiva->id)->get();
       return view('codigoiva.show',compact('codigosiva'));
     //  return $codigosiva;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Codigoiva $codigosiva)
    {
        return view('codigoiva.edit',['codigosiva'=>$codigosiva]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreCodigoivaRequest $request, Codigoiva $codigosiva)
    {

         $codigosiva->update($request->all());
       return redirect()->route('home.show',$codigosiva);
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Codigoiva $codigosiva)
    {
        $codigosiva->delete();
        return redirect()->route('home');
    }
}
