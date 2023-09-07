<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCodigoivaRequest;
use App\Models\Codigoiva;
class CodigosController extends Controller
{
    
    public function index()
    {
      $codigosiva=Codigoiva::all();
        return view('admin.codigos.index',compact('codigosiva'));
      
   

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.codigos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCodigoivaRequest $request)
    {
        $codigosiva=Codigoiva::create($request->all());
        return redirect()->route('admin.codigosiva.show',$codigosiva);
                            
    }   

    /**
     * Display the specified resource.
     */
    public function show(Codigoiva $codigo)
    {
      $codigosiva=Codigoiva::where('id',$codigo->id)->get();
    
       return view('admin.codigos.show',compact('codigosiva'));
     //  return $codigosiva;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Codigoiva $codigo)
    {
        return view('admin.codigos.edit',['codigo'=>$codigo]);
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(StoreCodigoivaRequest $request, Codigoiva $codigo)
    {

         $codigo->update($request->all());
       return redirect()->route('admin.codigosiva.show',$codigo);
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Codigoiva $codigo)
    {
        $codigo->delete();
        return redirect()->route('admin.codigosiva.index');
    }
}