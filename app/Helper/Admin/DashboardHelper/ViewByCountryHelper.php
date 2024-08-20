<?php

namespace App\Helper\Admin\DashboardHelper;

use Illuminate\Http\Request;
use App\Models\Admin\Categor;
use App\Models\Article;
use App\Models\PdfDocu;
use App\Models\faquestion;
use App\Events\Admin\FaquestionEvent;
use App\Models\Admin\Sitestat;
use Illuminate\Support\Facades\DB;

class ViewByCountryHelper{
    public function __construct(){
         // code goes here ...
    }

    //   view total
    public function totalTopCountry(){
         // code goes here ...
    }

    //   view by day 
    public function dailyTopCountry(){
        // code goes here ...
    }
    
    //   view by week
    public function weeklyTopCountry(){
        // code goes here ...
    }

    //   view by mounth
    public function monthlyToCountry(){
        // code goes here ...
    }

}