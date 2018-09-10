<?php

namespace App\Http\Controllers;

use App\Atividade;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaAtividades = Atividade::all();
        return view('atividade.list',['atividades' => $listaAtividades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atividade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $messages = array(
            'title.required' => 'É obrigatório um título para a atividade',
            'description.required' => 'É obrigatória uma descrição para a atividade',
            'scheduledto.required' => 'É obrigatório o cadastro da data/hora da atividade',
        );

        
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'scheduledto' => 'required|string',
        );

        
        $validador = Validator::make($request->all(), $regras, $messages);

        
        if ($validador->fails()) {
            return redirect('atividades/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        
        $obj_Atividade = new Atividade();
        $obj_Atividade->title =       $request['title'];
        $obj_Atividade->description = $request['description'];
        $obj_Atividade->scheduledto = $request['scheduledto'];
        $obj_Atividade->save();

        return redirect('/atividades')->with('success', 'Atividade criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atividade = Atividade::find($id);
        return view('atividade.show',['atividade' => $atividade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj_Atividade = Atividade::find($id);
        return view('atividade.edit',['atividade' => $obj_Atividade]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        
        $messages = array(
            'title.required' => 'É obrigatório um título da atividade',
            'description.required' => 'É obrigatória uma a descrição da atividade',
            'scheduledto.required' => 'É obrigatório o cadastro da data/hora da atividade',
        );

        
        $regras = array(
            'title' => 'required|string|max:255',
            'description' => 'required',
            'scheduledto' => 'required|string',
        );

        
        $validador = Validator::make($request->all(), $regras, $messages);

        
        if ($validador->fails()) {
            return redirect('atividades/$id/edit')
            ->withErrors($validador)
            ->withInput($request->all);
        }

        
        $obj_atividade = Atividade::findOrFail($id);
        $obj_atividade->title =       $request['title'];
        $obj_atividade->description = $request['description'];
        $obj_atividade->scheduledto = $request['scheduledto'];
        $obj_atividade->save();

        return redirect('/atividades')->with('success', 'Atividade alterada!!');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $obj_Atividade = Atividade::find($id);
        return view('atividade.delete',['atividade' => $obj_Atividade]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj_atividade = Atividade::findOrFail($id);
        $obj_atividade->delete($id);
        return redirect('/atividades')->with('sucess','Atividade excluída!!');
    }
}
