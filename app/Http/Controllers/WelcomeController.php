<?php

namespace App\Http\Controllers;

use App\Mail\EmailConfirmacao;
use App\Models\EmailConfirmacao as ModelEmailConfirmacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
        ]);

        $email = $request->email;

        if (ModelEmailConfirmacao::where('email', $email)->first()) {
            Session::flash('title', 'Email já cadastrado!');
            Session::flash('message', 'Se quiser pode se cadastrar com um email diferente...');
        } else {
            Mail::to($email)->send(new EmailConfirmacao($email));
            Session::flash('title', 'Email Enviado!');
            Session::flash('message', 'Email de confirmação enviado, assim que aprova-lo na sua caixa de entrada, seu email entrará na nossa base de dados para notificação!');
        }

        return redirect()->back(301);
    }

    public function view(Request $request)
    {
        ModelEmailConfirmacao::updateOrCreate(['email' => $request->email]);

        Session::flash('title', 'Email Confirmado!');
        Session::flash('message', 'Email confirmado com sucesso! Assim que finalizarmos te avisaremos!');

        return redirect()->route('welcome');
    }
}
