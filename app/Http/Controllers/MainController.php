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
        $zagon_o = DB::table('zagon_1')->get();
        $zagon_1 = array();
        $zagon_2 = array();
        $zagon_3 = array();
        $zagon_4 = array();

        foreach ($zagon_o as $animal)
        {
            $zagon_1 = array_add($zagon_1,$animal->id,'Овечка');
        }
        $zagon_t = DB::table('zagon_2')->get();
        foreach ($zagon_t as $animal)
        {
            $zagon_2 = array_add($zagon_2,$animal->id,'Овечка');
        }
        $zagon_fr = DB::table('zagon_3')->get();
        foreach ($zagon_fr as $animal)
        {
            $zagon_3 = array_add($zagon_3,$animal->id,'Овечка');
        }
        $zagon_f = DB::table('zagon_4')->get();
        foreach ($zagon_f as $animal)
        {
            $zagon_4 = array_add($zagon_4,$animal->id,'Овечка');
        }
        return view('main', compact('zagon_1','zagon_2','zagon_3','zagon_4'));

    }

}
