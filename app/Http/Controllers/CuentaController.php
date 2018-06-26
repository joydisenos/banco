<?php

namespace Bank\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Bank\Http\Controllers\Controller;
use Bank\Cuenta;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class CuentaController.
 *
 * @author  The scaffold-interface created at 2018-06-15 12:37:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - cuenta';
        $cuentas = Cuenta::paginate(6);
        return view('cuenta.index',compact('cuentas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - cuenta';
        
        return view('cuenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = new Cuenta();

        
        $cuenta->user_id = $request->user_id;

        
        $cuenta->tipo = $request->tipo;

        
        $cuenta->descripcion = 'Descripcion de la cuenta';

        
        $cuenta->detalles = 'Detalles de la cuenta';

        
        $cuenta->estatus = 0;

        
        $cuenta->disponible = 0;

        
        
        $cuenta->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new cuenta has been created !!']);

        return redirect('home')->with('status','Your Account was created successfull!, you must wait to evaluate and approve your request');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - cuenta';

        if($request->ajax())
        {
            return URL::to('cuenta/'.$id);
        }

        $cuenta = Cuenta::findOrfail($id);
        return view('cuenta.show',compact('title','cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - cuenta';
        if($request->ajax())
        {
            return URL::to('cuenta/'. $id . '/edit');
        }

        
        $cuenta = Cuenta::findOrfail($id);
        return view('cuenta.edit',compact('title','cuenta'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $cuenta = Cuenta::findOrfail($id);
    	
        $cuenta->user_id = $request->user_id;
        
        $cuenta->tipo = $request->tipo;
        
        $cuenta->descripcion = $request->descripcion;
        
        $cuenta->detalles = $request->detalles;
        
        $cuenta->estatus = $request->estatus;
        
        $cuenta->disponible = $request->disponible;
        
        
        $cuenta->save();

        return redirect('cuenta');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/cuenta/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$cuenta = Cuenta::findOrfail($id);
     	$cuenta->delete();
        return URL::to('cuenta');
    }
}
