<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    //
    public function province(){

        $provinces = Province::paginate(10);
        return view('admin.config.provinces.index', ['page' => 'manage-district', 'provinces' => $provinces]);

    }
}
