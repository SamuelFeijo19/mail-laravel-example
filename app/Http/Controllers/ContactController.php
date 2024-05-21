<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        try {
            Mail::to($request->email, $request->nome)->send(new Contact([
                'fromName' => env('MAIL_FROM_NAME'),
                'fromEmail' => env('MAIL_FROM_ADDRESS'),
                'subject' => 'Assunto do E-mail',
                'bodyMessage' => 'Mensagem do E-mail',
            ]));

            return response()->json(['message' => 'E-mail enviado com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Falha ao enviar e-mail: ' . $e->getMessage()], 500);
        }
    }

}
