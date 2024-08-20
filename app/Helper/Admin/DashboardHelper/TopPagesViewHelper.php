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

class TopPagesViewHelper{
    public function __construct(){
       // code goes here ...
    }

    public function totalTopPages(){
       // code goes here ...
    }

    public function dailyTopPages(){
        // code goes here ...
    }
    
    public function weeklyTopPages(){
       // code goes here ...
    }

    public function monthlyToPages(){
       // code goes here ...
    }
    
}