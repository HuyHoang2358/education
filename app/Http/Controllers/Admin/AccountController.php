<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    //
    public function index() {

        $users = User::paginate(10);
        return view('admin.accounts.index', ['page' => 'manage-account', 'users' => $users]);

    }
}
