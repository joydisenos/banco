<?php

namespace Bank\Http\Controllers;

use Illuminate\Http\Request;
use Bank\Cuenta;
use Bank\Movimiento;
use Bank\User;
use ElfSundae\Laravel\Hashid\Facades\Hashid;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.index');
    }

    public function accounts()

    {
        $cuentas = Cuenta::orderBy('estatus')->get();

        return view('admin.accounts',compact('cuentas'));
    }

    public function users()

    {
        $usuarios = User::all();

        return view('admin.usuarios',compact('usuarios'));
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);

        return view('admin.profile',compact('user'));
    }

    public function transactions()

    {
        $movimientos = Movimiento::all();
        $pendientes = Movimiento::where('estatus',0)->get();

        return view('admin.transactions',compact('movimientos', 'pendientes'));
    }

    public function operacion($id , $status)
    {
        $movimiento = Movimiento::findOrFail($id);

        if($status == 1){

            $cuentaDestino = $movimiento->cuenta_destino_id;

            $cuenta = Cuenta::findOrFail($cuentaDestino);
            $cuenta->disponible = $cuenta->disponible + $movimiento->monto;
            $cuenta->save();

            $movimiento->estatus = 1;
            $movimiento->save();

            return redirect()->back()->with('status','Transaction successfull');

        }else{

            $movimiento->estatus = 2;
            $movimiento->save();

            $origen = Cuenta::findOrFail($movimiento->cuenta_id);
            $origen->disponible = $origen->disponible + $movimiento->monto;
            $origen->save();

            return redirect()->back()->with('error','Transaction Denied');
        }
    }

    public function activate($id , $status)
    {
        $cuenta = Cuenta::findOrFail($id);
        $cuenta->estatus = $status;
        $cuenta->save();

        return redirect()->back()->with('status','Account Activated
            ');
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
}
