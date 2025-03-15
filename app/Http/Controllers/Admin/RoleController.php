<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    //
    public function index() {

        $roles = Role::paginate(10);
        return view('admin.roles.index', ['page' => 'manage-role', 'roles' => $roles]);

    }
}
