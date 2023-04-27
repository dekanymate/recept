<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receptek;

class ReceptekController extends Controller
{
    public function index(){
        $recepteks =  Receptek::all();
        return $recepteks;
    }
    
    public function show($id)
    {
        $receptek = Receptek::find($id);
        return $receptek;
    }
    public function destroy(Request $request)
    {
        Receptek::find($request->id)->delete();
    }
    public function store(Request $request)
    {
        $Receptek = new Brand();
        $Receptek->nev = $request->nev;
        $Receptek->kat_id = $request->kat_id;
        $Receptek->kep_eleresi_ut = $request->kep_eleresi_ut;
        $Receptek->leiras = $request->leiras;
        $Receptek->save();
    }

    public function update(Request $request, $id)
    {
        $Recept = Recept::find($id);
        $Recept->name = $request->name;
    }
}
