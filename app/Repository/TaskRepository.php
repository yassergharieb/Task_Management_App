<?php

namespace App\Repository;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskRepository implements TaskRepositoryInterface
{
    public function create($data)
    {

        return Task::create($data);
    }

    public function getAllUserTasks($user_id)
    {
        return Task::where("user_id", $user_id)->paginate(10);
    }

    public function getAll()
    {
       return Task::all();
    }

    public function get($id)
    {

        return Task::where('user_id' , Auth::user()->id)->find($id);
    }

    public function update($id, $data)
    {
        $task =  $this->get($id);

        return $task->update($data);
    }

    public function delete($id)
    {
        $task = $this->get($id);

        return $task->delete();
    }
}