<?php

namespace App\Http\Controllers;

use App\Models\Acomodacao;
use App\Models\AcomodacaoTipo;
use App\Models\Hotel;
use Illuminate\Http\Request;

class AcomodacaoController extends Controller
{
    public function index(Request $request)
    {
        $acomodacoes = Acomodacao::all();
        return view('acomodacao.index', compact('acomodacoes'));
    }

    public function create()
    {
        $hoteis = Hotel::all();
        $tiposAcomodacao = AcomodacaoTipo::all();
        return view('acomodacao.create')
            ->with(compact('tiposAcomodacao'))
            ->with(compact('hoteis'));
    }

    public function store(Request $request)
    {
        Acomodacao::create($request->all());
        return redirect()->route('acomodacao.index');
    }

    public function edit($id)
    {
        $acomodacao = Acomodacao::findOrFail($id);
        return view('acomodacao.edit', compact('acomodacao'));
    }

    public function update(Request $request, $id)
    {
        $acomodacao = Acomodacao::findOrFail($id);
        $request->validate($acomodacao->rules(true));

        $acomodacao->update($request->all());
        return redirect()->route('acomodacao.index');
    }

    public function destroy($id)
    {
        Acomodacao::destroy($id);
        return redirect()->route('acomodacao.index');
    }
}
