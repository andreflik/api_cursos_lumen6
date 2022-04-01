<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\http\Response;
use App\Cursos;


class CursosController extends Controller
{
    private $curso;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Cursos $curso)
    {
        $this->curso = $curso;
    }

    public function index() {
        return $this->curso->paginate(30);
    }

    public function show($curso) {
        return $this->curso->find($curso);
    }

    public function store(Request $request) {
        
        $this->curso->create($request->all());

        //mensagem de criacao
        return response()->json(['data' => ['message' => 'Curso criado com sucesso !']]);
    }

    public function update($curso, Request $request) {

        $curso = $this->curso->find($curso);

        $curso->update($request::all());

        return response()->json(['data' => ['message' => 'Curso atualizado com sucesso !']]);
    }

    public function destroy($curso) {
        $curso = $this->curso->find($curso);

        $curso->delete();

        return response()->json(['data' => ['message' => 'Curso removido com sucesso !']]);
    }
}
