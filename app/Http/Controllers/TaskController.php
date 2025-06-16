<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Status;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class TaskController extends Controller
{
    public function index() : View
    {
        $tasks = Task::latest()->paginate(10);
        return view('dashboard', compact('tasks'));
    }

    public function create(): View
    {
            $statuses = Status::all(); // Ambil semua data status dari DB
        return view('tasks.create', compact('statuses'));
    }

    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'status_id'     => 'required|exists:statuses,id'
        ]);


        Task::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'status_id'     => $request->status_id
        ]);

        //redirect to index
        return redirect()->route('dashboard')->with(['success' => 'New Task Saved!']);
    }

    public function edit($id): View
    {
        $task = Task::findOrFail($id);
        $statuses = Status::all();

        return view('tasks.edit', compact('task', 'statuses'));
    }

        public function update(Request $request, $id): RedirectResponse
        {
            $request->validate([
                'title'         => 'required|min:5',
                'description'   => 'required|min:10',
                'status_id'     => 'required|exists:statuses,id'
            ]);

            $task = Task::findOrFail($id);

            $task->update([
                'title'         => $request->title,
                'description'   => $request->description,
                'status_id'     => $request->status_id
            ]);

            return redirect()->route('tasks.index')->with(['success' => 'Task updated successfully!']);
        }
    public function destroy($id): RedirectResponse
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index')->with(['success' => 'Task deleted successfully!']);
    }

        
}
