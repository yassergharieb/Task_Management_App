<?php

namespace App\Repository;

interface RepsoitoryInterface
{
    public function get($id);
    public function update($id, $data);
    public function delete($id);
    public function create(array $data);
}
