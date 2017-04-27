<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Form;
use View;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function get()
    {
        $zagon_all = DB::table('zagon_all')->get();
        $dump = dump($zagon_all);
        return view('main', compact($zagon_all,$dump));

    }

}
