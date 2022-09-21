<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Http\Request;

class Test1Controller extends Controller
{
   public function index(){

       return view('main');

   }
   public function show() {

       dd(11111);
   }

}
