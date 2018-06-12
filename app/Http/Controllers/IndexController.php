<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    //
    public function index()
    {
      $data['data'] = DB::table('rfid')->get();

      if (count($data) > 0) {
        return view('index', $data);
      } else {
        return view('index');
      }
    }
}
