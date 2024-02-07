<?php

namespace App\Http\Controllers;

use App\Models\DadosContato;
use Illuminate\Http\Request;

class DadosContatoController extends Controller
{
    public function view()
    {
        $leads = DadosContato::select(
            'leads.id',
            'leads.nome',
            'leads.whatsapp',
            'leads.email',
            'leads.cargo',
            'leads.segmento',
            'leads.interesse',
        )->orderBy('leads.id', 'desc')->get();

        return view('index', compact('leads'));
    }

    public function apiLeads()
    {
        $leads = DadosContato::select(
            'leads.id',
            'leads.nome',
            'leads.whatsapp',
            'leads.email',
            'leads.cargo',
            'leads.segmento',
            'leads.interesse',
        )->orderBy('leads.id', 'desc')->get();

        return response()->json($leads);
    }
}
