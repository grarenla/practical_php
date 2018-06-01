<?php

namespace App\Http\Controllers;

use App\Apartments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentsController extends Controller
{
    //
    public function index(){
        $ap = DB::table('apartments')->paginate(6);
        return view('apartments.index') ->with('apartments', $ap);
    }
}
