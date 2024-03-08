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
        $osszosztaly = DB::table('bejegyzesek b')
        ->select('b.id, t.tevekenyseg_id, t.tevekenyseg_nev, t.pontszam')
        ->join('tevekenyseg t', 't.tevekenyseg_id', '=', 'b.tevekenyseg_id')
        ->where('osztaly_id', '=', $osztaly)
        ->get();

        return $osszosztaly;
    }
}
