<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\User;
use Illuminate\Http\Request;
use View;

class ListController extends Controller
{
    public function index() {

        $tasks = Tasks::all();

        return view('tasks.index', compact('tasks'));

    }

    public function show($id) {
        $tasks = Tasks::find($id);

        return view('tasks.show', compact('tasks'));
    }


    public function deleted($id) {

        $tasks = Tasks::find($id);

        if(!$tasks) {
            return redirect()->route('tasks.index')->with('erro', 'Usuário não encontrado');
        }

        $tasks->delete();

        return redirect()->route('tasks.index')->with('success', 'Usuário deletado com sucesso');

    }
}
