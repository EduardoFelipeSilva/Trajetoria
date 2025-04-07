<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\atraso;
use Illuminate\Support\Facades\DB;

class AtrasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atrasos = DB::table('tb_Atraso')
            ->join('tb_Periodo', 'tb_Atraso.idPeriodo', '=', 'tb_Periodo.idPeriodo')
            ->join('tb_Modulo', 'tb_Atraso.idModulo', '=', 'tb_Modulo.idModulo')
            ->join('tb_Curso', 'tb_Atraso.idCurso', '=', 'tb_Curso.idCurso')
            ->select(
                'tb_Atraso.idAtraso',
                'tb_Atraso.dtAtraso',
                'tb_Atraso.nomeAluno',
                'tb_Periodo.Periodo',
                'tb_Modulo.Modulo',
                'tb_Curso.Curso'
            )
            ->get();
        return response()->json($atrasos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
 
        $atraso = new Atraso();

        $atraso->dtAtraso = $request->dtAtraso;
        $atraso->nomeAluno = $request->nomeAluno;
        $atraso->idPeriodo = $request->Periodo;
        $atraso->idModulo = $request->Modulo;
        $atraso->idCurso = $request->idCurso;

        $atraso->save();

        return response()->json($atraso);
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
