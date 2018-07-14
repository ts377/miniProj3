<?php
/**
 * Created by PhpStorm.
 * User: amitav
 * Date: 4/9/16
 * Time: 3:00 PM
 */
namespace App\Repositories;

use App\Task;


class EloquentTask implements TaskInterface
{

    private $model;
    /**
     * EloquentTodo constructor.
     * @param Todo $model
     */
    public function __construct(Task $model)
    {
        $this->model = $model;
    }
    public function getModel()
    {
        return new Task();
    }
    public function getById($id)
    {
        $task = $this->getAll();
        return $task->find($id);

    }
    public function getAll()
    {
        return $this->model->all();
    }

    public function create(array $attributes)
    {
        $task = $this->getModel();

        $task->name = $attributes['name'];
        $task->category_id = $attributes['category_id'];
        $task->user_id = $attributes['user_id'];
        $task->order = $attributes['order'];


        $task->fill($attributes);
        $task->save();
        return $task;
    }
    public function update(Task $task,array $attributes)
    {
        $task = $this->getById($task->id);
        $task->update($attributes);
        return $task;
    }



}