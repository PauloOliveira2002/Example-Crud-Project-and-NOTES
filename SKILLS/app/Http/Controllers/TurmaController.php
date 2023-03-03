<?php

namespace App\Http\Controllers;

use App\Turma;
use Exception;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::orderBy('id','desc')->paginate(10);

        return view ('pages.turmas.index', ['turmas' => $turmas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome'                  => 'required',
            'descricao'             => 'required',
            'horas'                 => 'required',
            'data_inicio'           => 'required',
            'data_fim'              => 'required',
        ]);

        $turma                  = new Turma();
        $turma->nome            = $request->nome;
        $turma->descricao       = $request->descricao;
        $turma->horas           = $request->horas;
        $turma->data_inicio     = $request->data_inicio;
        $turma->data_fim        = $request->data_fim;
        $turma->save();

        return redirect('turmas')->with('status', 'Turma criada com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        return view('pages.turmas.show',['turma' => $turma]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {

        return view('pages.turmas.edit', ['turma' => $turma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        $turma->update($request->all());

        $turma                  = Turma::find($turma->id);
        $turma->nome            = $request->nome;
        $turma->descricao       = $request->descricao;
        $turma->horas           = $request->horas;
        $turma->data_inicio     = $request->data_inicio;
        $turma->data_fim        = $request->data_fim;
        $turma->save();

        return redirect('turmas')->with('status', 'Turma atualizada com Sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        try {

            $turma = Turma::find($turma->id);
            $turma->delete();

            return redirect('turmas')->with('status', 'Turma Apagada com Sucesso');

        }catch(Exception $e){

            return redirect()->back()->with('error_constraint','ERRO - Existem Alunos associados à Turma');

        };
    }
}
