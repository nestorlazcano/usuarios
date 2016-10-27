<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    //
    public function index()
    {
      return view('dashboards');
    }
}
