<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pilota extends Controller
{
    public function getPilotak() {
        return DB::select("SELECT * FROM versenyzok INNER JOIN csapatok ON csapatok.csapatId = versenyzok.csapat");
    }
}
