<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailConfirmacao;
use App\Models\EmailConfirmacao as ModelEmailConfirmacao;

class WelcomeController extends Controller
{
    public function email(Request $request){
        $validated = $request->validate([
            'email' => 'required|max:255',
        ]);
        
        $email = $request->only('email');
        if(ModelEmailConfirmacao::where('email', $email)->first()){
            Session::flash('message', 'Email já cadastrado!');
        }else{
            Mail::to($email)->send(new EmailConfirmacao($email));

            Session::flash('message', 'Email de confirmação enviado, assim que aprova-lo na sua caixa de entrada, seu email entrará na nossa base de dados para notificação!');
        }

        return redirect()->back();
    }

    public function confirmaEmail(Request $request){
        $email = new ModelEmailConfirmacao;
        $email->email = $request->email;
        $email->save();
        
        Session::flash('message', 'Email confirmado com sucesso! Assim que finalizarmos te avisaremos!');
        return redirect()->route('welcome');
    }
}
