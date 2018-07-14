<?php

namespace App\Repositories;
use App\Task;
interface TaskInterface
{
    public function getModel();
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update(Task $task, array $attributes);

}