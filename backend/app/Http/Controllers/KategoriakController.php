<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoriak;

class KategoriakController extends Controller
{
    public function index(){
        $kategoriaks =  Kategoriak::all();
        return $kategoriaks;
    }
    

}
