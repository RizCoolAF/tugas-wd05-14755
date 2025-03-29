<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
   public function index(): View
   {
        return view(view: 'dashboard.index');
   } //

   public function tables(): View
   {
        return view(view: 'tables.index');
   } //
}
