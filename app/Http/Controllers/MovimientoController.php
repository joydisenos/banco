<?php

namespace Bank\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Bank\Http\Controllers\Controller;
use Bank\Movimiento;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class MovimientoController.
 *
 * @author  The scaffold-interface created at 2018-06-15 12:39:17am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - movimiento';
        $movimientos = Movimiento::paginate(6);
        return view('movimiento.index',compact('movimientos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - movimiento';
        
        return view('movimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movimiento();

        
        $movimiento->user_id = $request->user_id;

        
        $movimiento->cuenta_id = $request->cuenta_id;

        
        $movimiento->tipo_operacion = $request->tipo_operacion;

        
        $movimiento->estatus = $request->estatus;

        
        $movimiento->detalles = $request->detalles;

        
        $movimiento->descripcion = $request->descripcion;

        
        $movimiento->observaciones = $request->observaciones;

        
        
        $movimiento->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new movimiento has been created !!']);

        return redirect('movimiento');
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
        $title = 'Show - movimiento';

        if($request->ajax())
        {
            return URL::to('movimiento/'.$id);
        }

        $movimiento = Movimiento::findOrfail($id);
        return view('movimiento.show',compact('title','movimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - movimiento';
        if($request->ajax())
        {
            return URL::to('movimiento/'. $id . '/edit');
        }

        
        $movimiento = Movimiento::findOrfail($id);
        return view('movimiento.edit',compact('title','movimiento'  ));
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
        $movimiento = Movimiento::findOrfail($id);
    	
        $movimiento->user_id = $request->user_id;
        
        $movimiento->cuenta_id = $request->cuenta_id;
        
        $movimiento->tipo_operacion = $request->tipo_operacion;
        
        $movimiento->estatus = $request->estatus;
        
        $movimiento->detalles = $request->detalles;
        
        $movimiento->descripcion = $request->descripcion;
        
        $movimiento->observaciones = $request->observaciones;
        
        
        $movimiento->save();

        return redirect('movimiento');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/movimiento/'. $id . '/delete');

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
     	$movimiento = Movimiento::findOrfail($id);
     	$movimiento->delete();
        return URL::to('movimiento');
    }
}
