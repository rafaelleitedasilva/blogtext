<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function migrate(Request $request)
    {
        // Exemplo: Rodar o comando "migrate" para executar as migrações do banco de dados
        Artisan::call('migrate');

        // Capturar a saída do comando Artisan (se necessário)
        $output = Artisan::output();

        // Faça algo com a saída do comando (opcional)
        return response()->json(['message' => "$output"], 200);
    }
}
