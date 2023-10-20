<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(Request $request)
    
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->message = $request->input('message');
        $message->save();

        return redirect('/contato')->with('success', 'Dados do formulário enviados com sucesso!');    }
}

