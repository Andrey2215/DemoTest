<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function mainPage()
    {
        $mes = DB::table('messages')->orderBy('time_create','DESC')->get();
        return view('YouAreWelcome',['mes' => $mes]);
    }
    function sendPage() {
        return view('Send');
    }
}
