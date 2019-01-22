<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        // Role::create(['name'=>'writer']);

    //    $permission = Permission::create(['name'=>'write post']);

        $role = Role::findById(1);
        $permission = Permission::findById(2);
     
        // $permission->removeRole($role);
        $role->revokePermissionTo($permission);

        return view('home');
    }
}
