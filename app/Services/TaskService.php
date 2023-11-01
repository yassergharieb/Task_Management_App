<?php 
namespace App\Services;

use App\Repository\TaskRepository;
use App\Services\IService;
use Illuminate\Support\Facades\Auth;

class TaskService implements IService {

    public function __construct(public TaskRepository $taskRepository )  {

     }

    public function getAll() {
      $user_id =  Auth::user()->id;
      return $this->taskRepository->getAllUserTasks($user_id);
    }

    public  function create(array $data) {
        $data['user_id'] = Auth::user()->id;
       return $this->taskRepository->create($data);
    } 
    public function get($id) {
      return  $this->taskRepository->get($id);
    }
    public function update($id, $data) {
        $data['user_id'] = Auth::user()->id;
        return $this->taskRepository->update($id , $data);
    }
    public function delete($id) {
        return $this->taskRepository->delete($id);
    }

}