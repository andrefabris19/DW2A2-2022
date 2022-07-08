<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcio;

class FuncioController extends Controller
{
    public function index(){

        $funcionarios = Funcio::all();

        return view('welcome',['funcionarios' => $funcionarios]);

    }

    public function create(){
        return view('funcios.create');
    }
    
    public function store(Request $request){

        $funcionarios = new Funcio;

        $funcionarios->nome = $request->nome;
        $funcionarios->cpf = $request->cpf;
        $funcionarios->cargo = $request->cargo;
        $funcionarios->salario = $request->salario;    

        //$user = auth()->user();
        //$funcionarios->user_id = $user->codigo;

        $funcionarios->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function destroy($id){
        
        Funcio::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }

    public function edit($id){

        // $user = auth()->user();

        $funcionario = Funcio::findOrFail($id);

        // if ($user->codigo != $funcionario->user_id){
        //    return redirect('/dashboard');
        // }

        return view ('funcios.edit', ['funcionario' => $funcionario]);
    }

    public function update(Request $request){

        $data = $request->all();

        Funcio::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');
    }

    public function dashboard(){
        //$users = auth()->user();
        //$funcionarios = $users->funcionarios;

        $funcionarios = Funcio::all();

        //$eventsAsParticipant = $user->eventsAsParticipant;

        return view ('funcios.dashboard', ['funcionarios' => $funcionarios]);
    }

    public function show($id){
        $funcionario = Funcio::findOrFail($id);

        $eventOwner = Funcio::where('id', $funcionario->user_id)->first()->toArray();

        return view('funcio.show', ['funcionario' => $funcionario]);
    }
}
