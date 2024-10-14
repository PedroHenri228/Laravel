<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function get_id($id) {
        $users = User::find($id);

        if (!$users) {
            return redirect()->route('users.index')->with('error', 'Tarefa não encontrada');
        }
    
        // Retorna a view com a tarefa
        return view('users.show', compact('users'));

    }


}
