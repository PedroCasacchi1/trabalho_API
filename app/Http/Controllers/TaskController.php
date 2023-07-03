<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tasktrabalho; // Acrescentei

class TaskController extends Controller
{
    public function index()
    {
        $tasktrabalho = Tasktrabalho::all();
        return response()->json($tasktrabalho);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ]);

        $task = Tasktrabalho::create($request->all());
        return response()->json($task, 201);
    }

    public function show(string $id)
    {
        $task = Tasktrabalho::findOrFail($id);
        return response()->json($task);
    }

    public function update(Request $request, string $id)
    {
        $task = Tasktrabalho::findOrFail($id);


       $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'status' => 'required',

        ]);

        $task->update($request->all());
        return response()->json($task);

    }

    public function destroy(string $id)
    {
        $task = Tasktrabalho::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Tarefa excluída com sucesso']); //null, 204);
    }
}
