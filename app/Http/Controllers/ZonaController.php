<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZonaRequest;
use App\Models\Zona;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = Zona::paginate(6);

        // return response()->json([
        //     "msg"=> "zonas de la junta directiva",
        //     "data"=> $zonas
        // ]);

        return view("zonas.index", compact('zonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zonas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(ZonaRequest $request)
    {
        // dd($request);
        // $zona = $request->except('_token');

        $zona = $request->validated();

        Zona::create($zona);

        return redirect()->route('zonas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function show(Zona $zona)
    {
        return view('zonas.show', compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function edit(Zona $zona)
    {
        return view('zonas.edit', compact('zona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Zona $zona)
    public function update(ZonaRequest $request, Zona $zona)
    {
        $z = $request->validated();

        $zona->update($z);

        return redirect()->route('zonas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zona $zona)
    {
        $zona->delete();
        return redirect()->route('zonas.index');
    }
}
