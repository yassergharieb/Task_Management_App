<?php 
namespace App\Services;

Interface IService {

    public function getAll();
    public function get($id);
    public function update( $user_id, $data);
    public function delete( $user_id); 
    public function  create(array $data);

}