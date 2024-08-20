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


class ViewByHelper 
{
    // helper class , custom class

    public function __construct(){

    }

     public function viewTotal(){
        $val = DB::select('SELECT * FROM sitestats');
        $val1 = DB::select('SELECT COUNT(DISTINCT token) as nbr_user FROM sitestats');
        
        return $val1;
     }

   //   view by day 
   public function viewByDay(){
      // code goes here ...
   }

   // view by week

   public function viewByWeek(){
      // code goes here ...
   }

   // view by month 

   public function viewByMonth(){
      // code goes here ...
   }

   
}