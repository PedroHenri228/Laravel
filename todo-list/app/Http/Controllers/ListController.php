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

        if(!$tasks) {
            return redirect()->route('tasks.index')->with('erro', 'Tarefa não encontrada');
        }

        return view('tasks.show', compact('tasks'));
    }


    public function deleted($id) {

        $tasks = Tasks::find($id);

        if(!$tasks) {
            return redirect()->route('tasks.index')->with('erro', 'Tarefa não encontrada');
        }

        $tasks->delete();

        return redirect()->route('tasks.index')->with('success', 'Usuário deletado com sucesso');

    }

    public function update(Request $request, $id) {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'ends_at' => 'required|date',
        ]);

        $task = Tasks::find($id);


        if (!$task) {
            return redirect()->route('tasks.index')->with('erro', 'Tarefa não encontrada');
        }

        $task->title = $validatedData['title'];
        $task->description = $validatedData['description'];
        $task->ends_at = $validatedData['ends_at'];

        $task->save();

        return redirect()->route('tasks.show', $task->id)->with('sucesso', 'Tarefa atualizada com sucesso');
    }

}
