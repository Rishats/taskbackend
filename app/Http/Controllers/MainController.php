<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Form;
use function PHPSTORM_META\type;
use View;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function killmore()
    {
        $id = $_POST["id"];
        $massiv_with_animals_id = explode(" ", $id);
        echo 'ЕСЛИ ВЫ СДЕЛАЛИ ВСЕ ВЕРНО. ТО ОВЕЧКИ ПОГИБНУТ :(';
        foreach ($massiv_with_animals_id as $animal){
            $animal = preg_replace("/[^0-9]/", '', $animal);
            settype($animal, "integer");
            if(DB::table('zagon_all')->where('id', '=', $animal)->delete() == true)
            {
                DB::table('zagon_dead')->insert(
                    ['idanimal' => $animal]
                );
            }
        }
        DB::select('CALL fixid();');
        return redirect('/alldone');
    }

    public function kill()
    {
        $id = $_POST["id"];
        $number_animals = preg_replace("/[^0-9]/", '', $id);
        settype($number_animals, "integer");
        if(DB::table('zagon_all')->where('id', '=', $number_animals)->delete() == true)
        {
            DB::table('zagon_dead')->insert(
                ['idanimal' => $number_animals]
            );
        }
        DB::select('CALL fixid();');
        return redirect('/alldone');
    }

    public function get()
    {
        $zagon_all = DB::table('zagon_all')->get();
        $dbsend = count($zagon_all);
        $izbitok = $dbsend % 4;
        $na_divs = $dbsend - $izbitok;
        $div = $na_divs / 4;
        $div_1 = $div;
        $div_2 = $div;
        $div_3 = $div;
        $div_4 = $div + $izbitok;
        $zagon_1 = array();
        $zagon_2 = array();
        $zagon_3 = array();
        $zagon_4 = array();

        foreach ($zagon_all as $animal)
        {
            if($animal->id <= $div_1)
            {
            $zagon_1 = array_add($zagon_1,$animal->id,'Овечка '.$animal->id);
            }
        }
        foreach ($zagon_all as $animal)
        {
            if($animal->id > $div_1 and $animal->id <= $div_2 + $div_1)
            {
                $zagon_2 = array_add($zagon_2,$animal->id,'Овечка '.$animal->id);
            }
        }
        foreach ($zagon_all as $animal)
        {
            if($animal->id > $div_2 + $div_1 and $animal->id <= $div_3 + $div_2 + $div_1)
            {
                $zagon_3 = array_add($zagon_3,$animal->id,'Овечка '.$animal->id);
            }
        }
        foreach ($zagon_all as $animal)
        {
            if($animal->id > $div_2 + $div_1 + $div_3 and $animal->id <= $div_4 + $div_3 + $div_2 + $div_1)
            {
                $zagon_4 = array_add($zagon_4,$animal->id,'Овечка '.$animal->id);
            }
        }
        return view('main', compact('zagon_1','zagon_2','zagon_3','zagon_4'));

    }
    public function getliving()
    {
        $zagon_all = DB::table('zagon_all')->get();
        $count = count($zagon_all);
        return view('living', compact('zagon_all','count'));
    }
    public function getpopulation()
    {
        $zagon_all = DB::table('zagon_all')->get();
        $dbsend = count($zagon_all);
        $izbitok = $dbsend % 4;
        $na_divs = $dbsend - $izbitok;
        $div = $na_divs / 4;
        $div_1 = $div;
        $div_2 = $div;
        $div_3 = $div;
        $div_4 = $div + $izbitok;
        $count = count($zagon_all);
        $max = max($div_1,$div_2,$div_3,$div_4);
        return view('population', compact('zagon_all','count','div_1','div_2','div_3','div_4','max'));
    }
    public function dead()
    {
        $zagon_dead = DB::table('zagon_dead')->get();
        $count = count($zagon_dead);
        return view('dead',compact('count','zagon_dead'));
    }


}
