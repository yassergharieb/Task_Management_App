<?php

namespace App\Repository;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskRepository implements TaskRepositoryInterface
{
    public function create($data)
    {
        $data['user_id'] = Auth::user()->id;

        return Task::create($data);
    }

    public function getAll()
    {
        return Task::where("user_id", Auth::user()->id)->paginate(10);
    }

    public function get($id)
    {
        return Task::find($id);
    }

    public function update($id, $data)
    {
        $task = $this->get($id);

        return $task->update($data);
    }

    public function delete($id)
    {
        $task = $this->get($id);

        return $task->delete();
    }
}