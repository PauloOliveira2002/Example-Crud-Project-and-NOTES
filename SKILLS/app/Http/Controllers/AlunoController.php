<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Turma;
use App\DB;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::orderBy('id','desc')->paginate(10);

        return view ('pages.alunos.index', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turmas = Turma::all();

        return view('pages.alunos.create',['turmas' => $turmas]);
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
            'nome'              => 'required',
            'contacto'          => 'required',
            'id_turma'          => 'required',
        ]);

        $aluno                  = new Aluno();
        $aluno->nome            = $request->nome;
        $aluno->contacto        = $request->contacto;
        $aluno->id_turma        = $request->id_turma;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->save();

        return redirect('alunos')->with('status', 'Aluno criado com Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('pages.alunos.show',['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        $turmas = Turma::all();

        return view('pages.alunos.edit', ['aluno' => $aluno , 'turmas' => $turmas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {



        $aluno->update($request->all());

        $aluno                  = Aluno::find($aluno->id);
        $aluno->nome            = $request->nome;
        $aluno->contacto        = $request->contacto;
        $aluno->id_turma        = $request->turma_id;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->save();

        return redirect('alunos')->with('status', 'Aluno editado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno = Aluno::find($aluno->id);
        $aluno->delete();

        return redirect('alunos')->with('status', 'Aluno Apagado com Sucesso');
    }
}
