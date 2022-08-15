<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(){

       $desk = Desk::all();

     // $desk_list = $desk->desk_lists;

       dd($desk);

   }
}
