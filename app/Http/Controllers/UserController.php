<?php

namespace Bank\Http\Controllers;

use Illuminate\Http\Request;
use Bank\Cuenta;
use Bank\Movimiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function profile()
    {
        return view ('user.profile');
    }

    public function updateprofile()
    {
        return view ('user.data');
    }

    public function transactions()
    {
        return view ('user.transactions');
    }

    public function deposit($id)
    {

        $cuenta = Cuenta::findOrFail($id);

        return view ('user.deposit',compact('cuenta'));
    }

    public function depositfund(Request $request)

    {
        $movimiento = new Movimiento();

        $movimiento->user_id = Auth::user()->id;

        $movimiento->cuenta_id = $request->cuenta_id;

        $movimiento->cuenta_destino_id = 0;

        $movimiento->tipo_operacion = 1;

        $movimiento->monto = $request->monto;

        $movimiento->estatus = 0;

        $details = Input::get('detalles');

        $detalles = implode(",", $details);

        $movimiento->detalles = $detalles;

        $movimiento->descripcion = '';

        $movimiento->observaciones = '';

        $movimiento->save();

        return redirect('user/home')->with('status','Deposit Successfull, our team will evaluate to aprove the transaction');
    }
}
