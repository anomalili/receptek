<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receptek;
use DB;

class ReceptekController extends Controller
{
    public function index() {
        $task = response ()->json(Receptek::all());
        return $task;
    }

    public function show($id) {
        $task = response ()->json(Receptek::find($id));
        return $task;
    }

    public function destroy($id) {
        Receptek::find($id)->delete();
    }

    public function store(Request $request) {
        $task = new Receptek();
        $task->nev = $request->nev;
        $task->kat_id = $request->kat_id;
        $task->kep_eleresi_ut = $request->kep_eleresi_ut;
        $task->leiras = $request->leiras;
        $task->datum = $request->datum;
        $task->save();
    }

    public function all() {
        $task = DB::table('recepteks')
        ->select('*','kategoriaks.nev as kat', 'recepteks.nev as etel')
        ->join('kategoriaks','kategoriaks.id','=','recepteks.kat_id')
        ->get();
        return $task;
    }

    public function sort($name) {
        $task = DB::table('recepteks')
        ->select('*','kategoriaks.nev as kat', 'recepteks.nev as etel')
        ->join('kategoriaks','kategoriaks.id','=','recepteks.kat_id')
        ->where('kategoriaks.nev','=',$name)
        ->get();
        return $task;
        
    }
}
