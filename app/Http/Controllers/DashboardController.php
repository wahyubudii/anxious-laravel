<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function admin_page()
    {
        return view('auths.admin');
    }
}
