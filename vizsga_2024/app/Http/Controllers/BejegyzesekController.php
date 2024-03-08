<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesekController extends Controller
{
    public function showall()
    {
        $bejegyzesek = DB::table('bejegyzeseks')
        ->select('*')
        ->get();

        return $bejegyzesek;
    }

    public function showclass($osztaly)
    {
        $osszosztaly = DB::table('bejegyzeseks')
        ->select('bejegyzeseks.id, tevekenysegs.tevekenyseg_id, tevekenysegs.tevekenyseg_nev, tevekenysegs.pontszam')
        ->join('tevekenysegs', 'tevekenysegs.tevekenyseg_id', '=', 'bejegyzeseks.tevekenyseg_id')
        ->where('osztaly_id', '=', $osztaly)
        ->get();

        return $osszosztaly;
    }
}
