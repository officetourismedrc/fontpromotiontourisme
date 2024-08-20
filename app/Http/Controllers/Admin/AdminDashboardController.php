<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Admin\DashboardHelper\ViewByHelper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class AdminDashboardController extends Controller
{
    //
    public function index(Request $request){
// creata a maxmind account

        $val = new ViewByHelper();
        
        //return $val->viewTotal();

        // put a sql statement that return the number of session
        // groupe by day 
        $ip1 = $request->ip();
        $ip = '162.159.24.227';
        $userInfo = Location::get($ip);
       // return dd($userInfo);
        return view('Admin.index');
    }
}
