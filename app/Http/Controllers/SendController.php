<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SendController extends Controller
{
 public function sendRequest(Request $request): \Illuminate\Http\RedirectResponse
 {
     $valid= $request->validate([
         'email' => 'required|min:4|max:100',
         'text' => 'required|max:512'
     ]);
     if($valid) {

         $message = new Message();
         $message->email = $request->input('email');
         $message->message = $request->input('text');
         $message->time_create = Carbon::now();

         if($message->save()) return redirect()->route('Thanks');
         else return (redirect()->route('Sorry'));
     }

 }

public function thanksPage()
{
    return view('Thanks');
}

public function sorryPage()
{
    return view('Sorry');
}
}
