<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService;

class TaskController extends Controller
{
    public function __construct (public TaskService $taskService)
    {
        
    }
    
    public function index()
    {
        $tasks = $this->taskService->getAll();

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
        $this->taskService->create($request->validated());

        return redirect()->route('task.all')->with(['success' => "task is created successfully"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = $this->taskService->get($id);

        return view('Tasks.edit')->with(['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, string $id)
    {
        $this->taskService->update($id, $request->validated());
        return redirect()->route('task.all')->with(['success' => "task is updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->taskService->delete($id);

        return redirect()->route('task.all')->with(['success' => "task is deleted successfully"]);
    }
}
