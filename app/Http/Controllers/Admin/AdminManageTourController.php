<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminManageTourController extends Controller
{
    public function create()
    {
        return view('admin.manage_tours.tours');
    }
}
