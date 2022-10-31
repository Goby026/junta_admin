<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Deuda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if($request->filled('search')){
        //     $clientes = Cliente::search($request->search)->get();
        // }else{
        //     $clientes = Cliente::paginate(10);
        // }

        $clientes = Cliente::search(request('search'))->paginate(10);

        // $clientes = Cliente::paginate(10);

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        // $date = "2022-02-22";
        // $newDate = Carbon::createFromFormat('Y-m-d', $date )->format('M Y');

        // dd($newDate);

        $deudas = Deuda::all()->where('usuario','=', $cliente->dni);

        // $deuda_total = DB::table('tbdeudas')->where('usuario', $cliente->dni )->sum('saldo');

        $deuda_total = Deuda::all()->where('usuario','=', $cliente->dni)->sum('saldo');

        return view('clientes.show', compact(['cliente', 'deudas', 'deuda_total']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }

    public function deudapdf(Cliente $cliente){

        $deudas = Deuda::all()->where('usuario','=', $cliente->dni);

        $deuda_total = Deuda::all()->where('usuario','=', $cliente->dni)->sum('saldo');

        $pdf = PDF::loadView('clientes.pdf.deuda', compact(['cliente', 'deudas', 'deuda_total']));
        $pdf->setPaper('A4', 'portrait');

        // return $pdf->download('deudas.pdf');
        return $pdf->stream();
    }
}
