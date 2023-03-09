<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoriak;

class KategoriakController extends Controller
{
    public function index() {
        $task = response ()->json(Kategoriak::all());
        return $task;
    }

    public function show($id) {
        $task = response ()->json(Kategoriak::find($id));
        return $task;
    }

    public function destroy($id) {
        ReceKategoriakptek::find($id)->delete();
    }

    public function store(Request $request) {
        $task = new Kategoriak();
        $task->nev = $request->nev;
        $task->save();
    }
}
