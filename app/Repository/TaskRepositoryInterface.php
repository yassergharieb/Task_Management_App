<?php

namespace App\Repository;

use App\Repository\RepsoitoryInterface;

interface TaskRepositoryInterface extends RepsoitoryInterface
{
    public function getAllUserTasks($user_id);
    
}
