<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga; 

class MangasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mangas = ["Me enamoré de la villana", "Bloom into you", "Goodbye my Rose Garden"];
        $mensaje = "Mangas!";
        $mangas2 = [
            ["Me enamoré de la villana", "Aonoshimo", "Arechi Manga"],
            ["Bloom into you", "Nio Nakatani", "Planeta Cómic"],
            ["Goodbye my Rose Garden", "Dr. Pepperco", "Arechi Manga"]
        ];

        $mangas3 = Manga::all();
        
        return view('mangas/index', [   
                                        'mangas' => $mangas, 
                                        'mensaje' => $mensaje,
                                        'mangas2' => $mangas2,
                                        'mangas3' => $mangas3
                                    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mangas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
