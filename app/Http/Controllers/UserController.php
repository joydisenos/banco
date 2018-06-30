<?php

namespace Bank\Http\Controllers;

use Illuminate\Http\Request;
use Bank\Cuenta;
use Bank\Movimiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use ElfSundae\Laravel\Hashid\Facades\Hashid;

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

    public function transfer()
    {
        return view('user.transfer');
    }

    public function debit(Request $request)
    {

        $request->validate([
            'destination_account' => 'min:10|max:10|required',
            'amount' => 'required',
        ]);

        $destino = Hashid::decode($request->destination_account);

        $cuenta = Cuenta::find($destino[0]);

        $origen = Cuenta::findOrFail($request->cuenta_id);
        if($origen->disponible < $request->amount)
        {
            return redirect()->back()->with('error',"Don't have enought funds in your account");
        }

        $origen->disponible = $origen->disponible - $request->amount;
        $origen->save();

        if($destino == null)
        {
            return redirect()->back()->with("error","Account doesn't exist, please verify the destination account id");
        }
        $movimiento = new Movimiento();

        $movimiento->user_id = Auth::user()->id;

        $movimiento->cuenta_id = $request->cuenta_id;

        $movimiento->cuenta_destino_id = $destino[0];

        $movimiento->tipo_operacion = 2;

        $movimiento->monto = $request->amount;

        $movimiento->estatus = 0;

        //$details = Input::get('detalles');

        //$detalles = implode(",", $details);

        $movimiento->detalles = '';

        $movimiento->descripcion = '';

        $movimiento->observaciones = '';

        $movimiento->save();
        return redirect('user/home')->with('status','Transfer success! we evaluate this transaction to complete this operation');
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

        $movimiento->cuenta_destino_id = $request->cuenta_id;

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
