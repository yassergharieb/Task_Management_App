<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repository\TaskRepositoryInterface;

class TaskController extends Controller
{
<<<<<<< HEAD

    public function __construct (public TaskRepositoryInterface $taskRepository)
    {
        
    }
     public function index()
=======
    public function __construct(public TaskRepositoryInterface $taskRepository)
>>>>>>> eba4eb928bf19efe0e4f8a29645c4d02f3b6aef4
    {
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAll();

        return view('Tasks.index')->with(['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTaskRequest $request)
    {
        $this->taskRepository->create($request->validated());

        return redirect()->route('task.all')->with(['success' => "task is created successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = $this->taskRepository->get($id);

        return view('Tasks.edit')->with(['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, string $id)
    {
        $this->taskRepository->update($id, $request->validated());

        return redirect()->route('task.all')->with(['success' => "task is updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->taskRepository->get($id)->delete();

        return redirect()->route('task.all')->with(['success' => "task is deleted successfully"]);
    }
}
