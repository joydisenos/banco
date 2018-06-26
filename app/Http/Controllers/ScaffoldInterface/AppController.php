<?php

namespace Bank\Http\Controllers\ScaffoldInterface;

use Bank\Http\Controllers\Controller;

/**
 * Class AppController.
 *
 * @author Amrani Houssain <amranidev@gmail.com>
 */
class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $users = \Bank\User::all()->count();
        $roles = \Spatie\Permission\Models\Role::all()->count();
        $permissions = \Spatie\Permission\Models\Permission::all()->count();
        $entities = \Amranidev\ScaffoldInterface\Models\Scaffoldinterface::all();

        return view('scaffold-interface.dashboard.dashboard', compact('users', 'roles', 'permissions', 'entities'));
    }
}
